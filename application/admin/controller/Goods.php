<?php
/**
 * 跃飞科技版权所有 @2016
 * User: 钟贵廷
 * Date: 2016/11/28
 * Time: 10:53
 */
namespace app\admin\controller;

use think\Controller;

class Goods extends Controller
{
    public function lst()
    {
        echo '商品列表';
    }

    public function test()
    {
        return $this->fetch();
    }
}