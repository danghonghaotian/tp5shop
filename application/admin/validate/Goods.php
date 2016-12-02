<?php
/**
 * 跃飞科技版权所有 @2016
 * User: 钟贵廷
 * Date: 2016/11/28
 * Time: 16:56
 */
namespace app\admin\validate;

use think\Validate;

class Goods extends Validate
{
    protected $rule = [
//        'name'  =>  'require|max:25',
//        'email' =>  'email',
    ];

    protected $message  =   [
//        'name.require' => '名称必须',
//        'name.max'     => '名称最多不能超过25个字符',
//        'age.number'   => '年龄必须是数字',
//        'age.between'  => '年龄只能在1-120之间',
//        'email'        => '邮箱格式错误',
    ];

    protected $scene = [
//        'edit'  =>  ['name','age'=>'require|number|between:1,120'],
    ];


}