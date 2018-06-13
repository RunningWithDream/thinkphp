<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->replace('__PUBLIC__', '/public/static');
    }

    public function index()
    {
        return $this->fetch();
    }

    public function color()
    {
        return $this->fetch();
    }

    public function test()
    {
        return $this->fetch();
    }

    public function jquery()
    {
        return $this->fetch();
    }

    public function web()
    {
        return $this->fetch();
    }

    public function category()
    {
        return $this->fetch();
    }

    public function cart()
    {
        return $this->fetch();
    }

    public function miss()
    {
        return '你所访问的页面不存在';
    }
}

