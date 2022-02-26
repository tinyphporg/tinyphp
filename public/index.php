<?php
/**
 * @Copyright (C), 2013-, King.
 * @Name index.php
 * @Author King
 * @Version stable 1.0.1
 * @Date 2019年11月18日上午11:18:04
 * @Description 主入口文件
 * @History King 2019年11月18日上午11:18:04 第一次建立该文件
 *          King 2019年11月18日上午11:18:04 修改
 *          King 2020年6月5日16:04 stable 1.0.1 审定
 */

// 项目根路径 该常量必须设置
define('TINY_ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// composer autoload
define('TINY_COMPOSER_FILE', TINY_ROOT_PATH . 'vendor/autoload.php');
require_once TINY_COMPOSER_FILE;

/* 设置application主目录的常量; 该常量必须设置 
*  Application run 自动识别web/console模式
*  Profile.php 为应用配置文件
*  ->setBootsrap(new \App\Common\Bootstrap()) 设置自定义引导类
*  ->regPlugin(new \App\Common\Plugin()) 注册自定义插件
*  ->run() Application运行
*/
define('APPLICATION_PATH', dirname(__DIR__) . '/application/');
\Tiny\Tiny::createApplication(APPLICATION_PATH, APPLICATION_PATH . 'config/profile.php')->run();