<?php
/**
 * 跃飞科技版权所有 @2016
 * User: 钟贵廷
 * Date: 2016/11/26
 * Time: 17:20
 */
return [
    'css'=> request()->domain().'/assets/admin/styles', //配置后台css
    'js'=>  request()->domain().'/assets/admin/js', //配置后台js
    'img'=> request()->domain().'/assets/admin/images', //配置后台图片
    'shopName' =>'丹宏昊天 管理中心',
    'ueditor'=>request()->domain().'/assets/ueditor', //百度编辑器
    'jq-ui' => request()->domain().'/assets/jquery-ui', //jquery-ui插件

    //前台样式配置
    'f-css'=>request()->domain().'/assets/home/style',
    'f-js'=> request()->domain().'/assets/home/js',
    'f-img'=>request()->domain().'/assets/home/images',
];