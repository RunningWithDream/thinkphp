<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"C:\xampp\htdocs\thinkphp/application/view\index\web.html";i:1528725579;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scaleable:no">
    <title>Title</title>
    <style>

        *,
        ::before,
        ::after{
            padding: 0;
            margin: 0;

            /*在移动端特殊的设置*/
            /*清除点击高亮效果*/
            -webkit-tap-highlight-color: transparent;
            /*设置所有的盒子的宽度以边框开始计算*/
            -webkit-box-sizing: border-box;
            /*要兼容 webkit 浏览器内核厂商 这种情况一般是老的移动端浏览器*/
            box-sizing: border-box;
        }
        body{
            font-size: 14px;
            color: #333;
            font-family: "MicroSoft YaHei","sans-serif";/*是设备默认的字体*/
        }
        ul,ol{
            list-style: none;
        }
        a{
            text-decoration: none;
            color: #333;
        }
        a:hover{
            color: #333;
        }
        input,textarea{
            border: none;
            outline: none;
            resize: none;
            /*特殊的属性定义  清除浏览器给input自带的样式*/
            -webkit-appearance: none;/*组件默认的样式空*/
        }

        [class^="icon_"]{
            background: url("/public/static/image/web/sprites.png") no-repeat;
            /*压缩背景图*/
            background-size: 200px 200px;
        }

        .container {
            min-width: 300px;
            max-width: 640px;
            margin: 0 auto;
            position: relative;
        }

        .container .header {
            width: 100%;
            height: 40px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1;
            background-color: #2dc49b;
        }

        .container .header .header-box {
            max-width: 640px;
            min-width: 300px;
            margin: 0 auto;
            height: 40px;
            position: relative;
        }

        .container .header .header-box .icon_logo {
            background-position: 0 -103px;
            position: absolute;
            left: 10px;
            top: 4px;
            height: 36px;
            width: 60px;
        }

        .container .header .header-box form {
            width: 100%;
            padding-left: 75px;
            padding-right: 55px;
            position: relative;
        }

        .container .header .header-box .icon_search {
            height: 20px;
            width: 20px;
            background-position: -60px -109px;
            position: absolute;
            left: 80px;
            top: 10px;
        }

        .container .header .header-box .search {
            width: 100%;
            border-radius: 15px;
            height: 30px;
            margin-top: 5px;
            padding-left: 30px;
        }

        .container .header .header-box .search-btn {
            position: absolute;
            right: 0;
            top: 0;
            width: 50px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 15px;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <div class="header-box">
            <a href="" class="icon_logo"></a>
            <form action="#">
                <a href="#" class="icon_search"></a>
                <input class="search" type="text">
            </form>
            <a href="#" class="search-btn">搜索</a>
        </div>
    </div>
</div>
<script>

    //     事件类型：
    //
    // touchstart : 触摸开始（手指放在触摸屏上）
    //
    // touchmove : 拖动（手指在触摸屏上移动）
    //
    // touchend : 触摸结束（手指从触摸屏上移开）
    //
    // touchenter ：移动的手指进入一个dom元素。
    //
    // touchleave ：移动的手指离开一个dom元素。
    //
    // 还有一个touchcancel，是在拖动中断时候触发。
    var div = document.querySelector('div');
    div.addEventListener('touchstart', function (e) {
        // e.preventDefault();//阻止事件继续传递
        console.log(e);
        console.log(e.targetTouches);//当前目标元素所有触摸点，支持多点触摸，是一个数组
        console.log(e.changedTouches);//最近改变的触摸点，包括屏幕外不显示的触摸点
        console.log(e.touches);//当前屏幕所有触摸点，不包括屏幕外的

        console.log(e.targetTouches[0].clientX);//
        console.log(e.targetTouches[0].clientX);//
        console.log(e.targetTouches[0].clientX);//

        console.log("touch start");
    });

    div.addEventListener('touchmove', function (e) {
        console.log("touch move");
    });

    div.addEventListener('touchend', function (e) {
        console.log("touch end");
    });

    div.addEventListener('click', function (e) {
        console.log("click");
    });
</script>
</body>
</html>