<?php
/**
 * Created by PhpStorm.
 * User: 钟贵廷
 * Date: 2016/11/26
 * Time: 16:49
 */

return [
    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'think',
        // 模板路径
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => 'phtml',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ],
];