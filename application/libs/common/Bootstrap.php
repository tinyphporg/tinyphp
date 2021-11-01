<?php 
/**
 *
 * @copyright (C), 2013-, King.
 * @name Bootstrap.php
 * @author King
 * @version stable 1.0
 * @Date 2017年3月12日下午2:05:36
 * @Class List
 * @Function List
 * @History King 2021年8月31日上午11:19:50 0 第一次建立该文件
 *          King 2021年8月31日上午11:19:50 1 修改
 *          King 2021年8月31日上午11:19:50 stable 1.0.01 审定
 */
namespace App\Common;

use Tiny\MVC\Bootstrap\Base;

/**
 * 引导初始化程序
 * 
 * 加载额外的lib config等
 *
 */
class Bootstrap extends Base
{
    /**
     * 可加载额外的lib
     * 
     * @return void
     */
    public function initImports($app)
    {
    }
    
    /**
     * 可加载额外的配置文件
     * 
     * @return void
     */
    public function initConfig($app)
    {  
    }
}
?>