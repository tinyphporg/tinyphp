<?php
namespace App\Controller\Console;

use Tiny\Data\Db\DbException;
use App\Model\Main\UserInfo;
use Tiny\Lang\Lang;
use Tiny\Config\Configuration;

class Main extends \Tiny\MVC\Controller\ConsoleController
{
    /**
     * @autowire
     * 
     * @var UserInfo
     */
    protected UserInfo $userinfo;
    

    public function testAction()
    {
        static $i;
        if ($i > 10) {
            exit(1);
        }
        $i++;
        echo "bbbbbbbbbb";
    }
    public function index1Action()
    {
        echo "demo1" . $this->config['status.index'];
    }
    
    public function indexAction(UserInfo $userinfo, Lang $lang, Configuration $config)
    {
        
        $actionName = $this->request->get['a'];
        $controllerName = $this->request->get['c'];
        $name = $this->request->get['name'];
        
        echo $lang->translate('status.0','sss');
        echo $config['example.default.b'];
        
        //$isName = $this->request->get->isRequired('name') ? 'true' : 'false';
        // 模型使用
        $userInfos = $userinfo->getUsers();
        $this->assign([
            'actionName' => $actionName,
            'controllerName' => $controllerName,
            'name' => $name,
            'defName' => 'tinyphp',
            'isName' => $isName,
            'users' => $userInfos,
            'users1' => $userInfo1
        ]);
        echo "aa1";

    }

}
?>