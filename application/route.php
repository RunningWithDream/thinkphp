<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
//    全局路由
    '__pattern__' => [
        'name' => '\w+',
    ],
//    局部路由
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '/'  => ['index/index/jquery',['method' => 'get']],

    'index/index/index'  => ['index/index/index',['method' => 'get']],
    'index/index/web'  => ['index/index/web',['method' => 'get']],
    'index/index/color'  => ['index/index/color',['method' => 'get']],
    '[color]'  => [
        '/'=> ['index/index/color',['method' => 'get']],
        'index/index/color'  => ['index/index/color',['method' => 'get']],
    ],

    'index/index/test'  => ['index/index/test',['method' => 'get']],
    '[test]'  => [
        '/'=> ['index/index/test',['method' => 'get']],
        ':id'=>['index/index/test',['method' => 'get'],['id' => '\d{2}']],
        ':name'=>['index/index/test',['method' => 'get'],['name' => '\s+']],
        ':age'=>['index/index/test',['method' => 'get'],['age' => '\d+']],
    ],
    '__miss__'  => 'index/index/miss',
];
