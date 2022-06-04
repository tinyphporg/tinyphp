<?php
/**
 * @desc 单文件打包配置
 * 
 * @copyright (C), 2013-, King.
 * @name tinyphp-demo.php
 * @author King
 * @version stable 2.0
 * @Date 2021年10月12日下午3:09:26
 * @Class List:
 * @Function List function_container
 * @History King 2022年3月12日下午3:09:26 2017年3月8日下午4:20:28 0 第一次建立该文件
 */

/**
 * 返回一个单文件打包配置
 * 
 * [
 *      name 打包后生成的单文件名  
 *          example: tinyphp-demo => tinyphp-demo.phar
 *          
 *      header_php_env 是否在打包文件首行添加PHP运行环境
 *          example: #!/usr/bin/php
 *          运行单文件的方式可由php tinyphp-demo.phar 变为 ./tinyphp-demo
 *          
 *      namespaces [namespace => dirname]
 *          加载命名空间对应的加载目录和路径
 *      
 *      controller 运行单文件时的默认控制器
 *      
 *      action 运行单文件时的默认动作
 *      
 *      framework_path 框架源代码目录
 *      
 *      vendor_path composer库引入的目录路径
 *      
 *      exclude 打包时忽略的文件正则
 *      
 *      attachments => [dirname...]
 *          运行单文件时解压在单文件所在目录的文件和文件夹
 *           example: ['config/app', APPLICATION_PATH . 'config/'],
 *      
 *      home_attachments => [dirname...]
 *          运行单文件时解压在单文件用户所在目录的文件和文件夹
 *          example : 用户为wwww，解压目录则为 /home/www/.tinyphp-demo
 * ]
 */
return [
    'name' => 'tinyphp',
    'header_php_env' => true,
    'namespaces' => [],
    'controller' => 'main',
    'action' => 'build',
    'framework_path' => TINY_FRAMEWORK_PATH,
    'vendor_path' => dirname(APPLICATION_PATH) . '/vendor',
    'exclude' => ["/\.(git|buildpath|project|dat|log|settings|md|svn)$/","/vendor\/smarty\/smarty/", "/tinyphp-ui\/(node_modules|src\/js|conf|dist|build|templates\/pages\/)/"],
    'attachments' => [], 
    'home_attachments' => [], 
];
?>