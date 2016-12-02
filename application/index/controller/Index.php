<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return 'tp5第一个项目搭建';
    }

    public function test()
    {
        $this->assign('name','张三');
        $arr = ['张三','李四','王五'];
        $this->assign('data',$arr);

       return $this->fetch('test');
    }
}
