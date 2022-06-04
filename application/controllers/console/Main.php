<?php
/**
 * 命令行下控制器
 * 
 * @copyright (C), 2013-, King.
 * @name Main.php
 * @author King
 * @version stable 2.0
 * @Date 2022年3月14日下午9:13:39
 * @Class List class
 * @Function List function_container
 * @History King 2022年3月14日下午9:13:39 2017年3月8日下午4:20:28 0 第一次建立该文件
 */
namespace App\Controller\Console;

use App\Model\Main\UserInfo;
use Tiny\Lang\Lang;
use Tiny\Config\Configuration;
use Tiny\MVC\Application\ApplicationBase;
use Tiny\MVC\Application\Properties;
use Tiny\MVC\Application\ConsoleApplication;

/**
* 默认控制器
* 
* @package namespace
* @since 2022年3月14日下午9:14:00
* @final 2022年3月14日下午9:14:00
*/
class Main extends \Tiny\MVC\Controller\ConsoleController
{
    
    /**
     *
     * @autowire 实例化时自动加载
     *
     * @var UserInfo
     */
    protected UserInfo $userinfo;
    
    /**
     * 当前应用实例
     * 
     * @var ConsoleApplication
     */
    protected ConsoleApplication $app;
    
    /**
     * @autowired 实例化时自动执行
     */
    protected function init(ConsoleApplication $app)
    {
        $this->app = $app;
    }
    
    /**
     * 测试
     */
    public function testAction()
    {
        echo "console test";
        sleep(20000);
    }
    
    /**
     * 测试单文件打包后的本地配置项
     *
     * @param ApplicationBase $app
     */
    public function buildAction(Properties $properties, Configuration $config)
    {
        echo sprintf("config.status.index: %s \n", $config['status.index']);
        echo sprintf("properties.status.index: %s \n", $properties['status.index']);
    }
    
    /**
     * 测试首页
     * 
     * @param UserInfo $userinfo 
     * @param Lang $lang
     * @param Configuration $config
     */
    public function indexAction(UserInfo $userinfo, Lang $lang, Configuration $config)
    {
        $actionName = $this->request->getActionName();
        $controllerName = $this->request->getControllerName();   
        $isName = $this->request->param->isRequired('name') ? 'true' : 'false';
        $name = $this->request->param['name'];
        $userInfos = $userinfo->getUsers();
        $output = [
            'actionName' => $actionName,
            'controllerName' => $controllerName,
            'name' => $name,
            'defName' => 'tinyphp',
            'isName' => $isName,
            'users' => $userInfos,
        ];
        $this->response->outFormatJSON(0, $config['example.default.b'], $output);
    }
}
?>