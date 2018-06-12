<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"C:\xampp\htdocs\thinkphp/application/view\index\web.html";i:1528844661;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scaleable:no">
    <title>移动商城</title>
    <link charset="utf-8" rel="stylesheet" href="/public/static/css/index/base.css">
    <link charset="utf-8" rel="stylesheet" href="/public/static/css/index/web.css">
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


    <div class="banner">
        <ul class="clearfix">
            <li><a href=""><img src="/public/static/image/web//l8.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l1.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l2.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l3.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l4.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l5.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l6.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l7.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l8.jpg" alt=""></a></li>
            <li><a href=""><img src="/public/static/image/web//l1.jpg" alt=""></a></li>
        </ul>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
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