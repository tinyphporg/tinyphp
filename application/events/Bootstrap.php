<?php
/**
 *
 * @copyright (C), 2013-, King.
 * @name Bootstrap.php
 * @author King
 * @version stable 2.0
 * @Date 2017年3月12日下午2:05:36
 * @Class List
 * @Function List
 * @History King 2021年8月31日上午11:19:50 0 第一次建立该文件
 *          King 2021年8月31日上午11:19:50 1 修改
 *          King 2021年8月31日上午11:19:50 stable 1.0.01 审定
 *          King 2022年7月4日下午3:05:35 stable 2.0.0 更新
 */
namespace App\Event;

use Tiny\MVC\Bootstrap\Bootstrap as Base;
use Tiny\MVC\Application\ApplicationBase;

/**
 * 当前应用的引导类程序
 *
 * @package App.Event
 * @since 2021年8月31日上午11:19:50
 * @final 2022年7月4日下午3:05:35
 */
class Bootstrap extends Base
{
    
    /**
     * 通过自动注入的方式
     *
     * @autowired
     * @param ApplicationBase $app 当前应用实例
     */
    public function imports(ApplicationBase $app)
    {
    }
    
    /**
     * 通过init前缀函数注入的方式
     *
     * @param ApplicationBase $app 当前应用实例
     */
    public function initConfig(ApplicationBase $app)
    {
    }
}
?>