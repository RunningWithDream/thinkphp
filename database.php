<?php

//mysql_real_escape_string() 函数转义 SQL 语句中使用的字符串中的特殊字符。
//mysqli_escape_string — 别名 mysqli_real_escape_string()  （可以预防数据库攻击）
//预防数据库攻击的正确做法：
function check_input($value)
{
    // 去除斜杠
    if (get_magic_quotes_gpc()) {
        $value = stripslashes($value);
    }
    // 如果不是数字则加引号
    if (!is_numeric($value)) {
        $value = "'" . mysql_real_escape_string($value) . "'";
    }
    return $value;
}

$con = mysql_connect("localhost", "hello", "321");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
// 进行安全的 SQL
$user = check_input($_POST['user']);
$pwd = check_input($_POST['pwd']);
$sql = "SELECT * FROM users WHERE user=$user AND password=$pwd";
mysql_query($sql);
mysql_close($con);