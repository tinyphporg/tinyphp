<?php
namespace App\Controller\Console;

use Tiny\Data\Db\DbException;

class Main extends \Tiny\MVC\Controller\ConsoleController
{
    public function onstart()
    {
        echo "\nonstart\n";
    }

    public function onstop()
    {
        echo "\nonstop\n";
    }

    public function testAction()
    {
        echo "bbbbbbbbbb";
    }
    public function index1Action()
    {
        echo "demo1" . $this->config['status.index'];
    }
    
    public function indexAction()
    {
        
        $actionName = $this->request->get['a'];
        $controllerName = $this->request->get['c'];
        $name = $this->request->get['name'];
        
        //$isName = $this->request->get->isRequired('name') ? 'true' : 'false';
        // 模型使用
        $userInfo = $this->mainUserInfoModel->getUsers();
        $this->assign([
            'actionName' => $actionName,
            'controllerName' => $controllerName,
            'name' => $name,
            'defName' => 'tinyphp',
            'isName' => $isName,
            'users' => $userInfo,
            'users1' => $userInfo1
        ]);
        echo "aa1";

    }

}
?>