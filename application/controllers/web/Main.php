<?php
/**
 *
 * @copyright (C), 2013-, King.
 * @name Main.php
 * @author King
 * @version Beta 1.0
 * @Date 2021年8月24日下午6:51:23
 * @Description
 * @Class List 1.
 * @Function List 1.
 * @History King 2021年8月24日下午6:51:23 第一次建立该文件
 *          King 2021年8月24日下午6:51:23 修改
 *         
 */
namespace App\Controller;

use Tiny\MVC\Controller\Controller;
use Tiny\Config\Configuration;

/**
* An example of main controller
* 
* @package App.Controller
* @since 2022年6月4日下午8:52:14
* @final 2022年6月4日下午8:52:14
*/
class Main extends Controller
{
    /**
     * 首页
     * 
     * @param Configuration $config 配置实例
     */
    public function indexAction(Configuration $config)
    {
       $this->display('main/index.htm');
    }
}
?>