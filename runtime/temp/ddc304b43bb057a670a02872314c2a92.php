<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"C:\xampp\htdocs\thinkphp/application/view\index\index.html";i:1526709192;s:58:"C:\xampp\htdocs\thinkphp\application\view\common\main.html";i:1525941010;s:58:"C:\xampp\htdocs\thinkphp\application\view\common\head.html";i:1525941535;s:58:"C:\xampp\htdocs\thinkphp\application\view\common\foot.html";i:1525940409;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link charset="utf-8" rel="stylesheet" href="/public/static/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link charset="utf-8" rel="stylesheet" href="/public/static/css/index/index.css">
</head>



<div class="container-fluid">
    <div class="row w margin-top">
        <div class="col-md-3"><img src="/public/static/image/avatar.jpg" alt="头像" class="img-thumbnail avatar"></div>
        <div class="col-md-9">
            <h1 class="name">孙小悟同学</h1>
            <div class="say-container">
                <span class="say">座右铭
                </span>
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                人生就是向死而生的旅程~
            </div>

            <div class="btn-group btn-group-lg pull-right position-bottom" role="group">
                <a type="button" class="btn btn-default" href="<?php echo url('color'); ?>">色组</a>
                <button type="button" class="btn btn-default">后端</button>
                <button type="button" class="btn btn-default">日志</button>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row w">
        <div class="col-md-12">
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Active link</a></li>
                <li role="presentation" class=""><a href="#"> link</a></li>
                <li role="presentation" class=""><a href="#"> link</a></li>
            </ul>

            <?php echo url('color'); ?>
        </div>
    </div>

</div>
<body>

</body>
</html>