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

/**
 * an example of main controller
 */
class Main extends Controller
{
    
    /**
     * main/index
     */
    public function indexAction()
    {
        $actionName = $this->request->get->formatString('a');
        $controllerName = $this->request->get->formatString('c');
        $name = $this->request->get->formatString('name', 'tinyphp');
        $isName = $this->request->get->isRequired('name') ? 'true' : 'false';
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
       // $this->view->messagebox->show('aaa');
        $this->parse('main/index.htm');
    }
    
    /**
     * main/index
     */
    public function tplAction()
    {
        $actionName = $this->request->get->formatString('a');
        $controllerName = $this->request->get->formatString('c');
        $name = $this->request->get->formatString('name', 'tinyphp');
        $isName = $this->request->get->isRequired('name') ? 'true' : 'false';
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
        $this->parse('main/index.tpl');
    }
    
    /**
     * template php file
     */
    public function indexRedisAction()
    {
        $actionName = $this->request->get->formatString('a');
        $controllerName = $this->request->get->formatString('c');
        $name = $this->request->get->formatString('name', 'tinyphp');
        $isName = $this->request->get->isRequired('name') ? 'true' : 'false';
        
        // 模型使用
        $userInfo1 = $this->mainUserUserInfoByRedisModel->getUsers();
        $this->assign([
            'actionName' => $actionName,
            'controllerName' => $controllerName,
            'name' => $name,
            'defName' => 'tinyphp',
            'isName' => $isName,
            'users' => $userInfo1
        ]);
        $this->parse('main/index.htm');
    }
    
    /**
     * template php file
     */
    public function index1Action()
    {
        $actionName = $this->request->get->formatString('a');
        $controllerName = $this->request->get->formatString('c');
        $name = $this->request->get->formatString('name', 'tinyphp');
        $isName = $this->request->get->isRequired('name') ? 'true' : 'false';
        
        // 模型使用
        $userInfo = $this->mainUserInfoModel->getUsers();
        print_r($userInfo);
        $this->assign([
            'actionName' => $actionName,
            'controllerName' => $controllerName,
            'name' => $name,
            'defName' => 'tinyphp',
            'isName' => $isName,
            'users' => $userInfo,
        ]);
        $this->parse('main/index.htm');
    }
    /**
     * out json
     */
    public function apiAction()
    {
        $this->response->outFormatJSON(0, ' say hello world', ['name' => 'tinyphp']);
    }
    
    /**
     * an example of using lang packs
     *
     * @param
     *        void
     * @return void
     */
    public function langAction()
    {
        $frameworksName = $this->lang['frameworks_name'];
        $this->response->appendBody($frameworksName);
        $this->response->outFormatJSON('0');
    }
    
    /**
     * an example of using cookies
     *
     * profile cookie node
     * $profile['cookie']['domain'] = '';
     * $profile['cookie']['path'] = '/';
     * $profile['cookie']['expires'] = 3600;
     * $profile['cookie']['prefix'] = '';
     * $profile['cookie']['encode'] = FALSE;
     */
    public function cookieAction()
    {
        $this->cookie->set('frameworksName', $this->lang['frameworks_name']);
        $frameworksName = $this->cookie->get('frameworksName');
        $this->response->appendBody($frameworksName);
    }
    
    /**
     * an example of using configs
     */
    public function configAction()
    {
        $example = [
            'default' => $this->config['example.default'],
            'custom' => $this->config['example.custom.name'],
            'setting' => $this->config->get('example.setting')
        ];
        $exampleStr = var_export($example, TRUE);
        $this->response->appendBody($exampleStr);
    }
    
    /**
     * an example of using caches
     */
    public function cacheAction()
    {
        $example = $this->cache->get('example.name');
        if (!$example)
        {
            $example = [
                'name' => 'tinyphp'
            ];
            $this->cache->set('example.name', $example, 60);
        }
        $this->response->appendBody(var_export($example, TRUE));
        
        /* cache id */
        $example = $this->cache['default']->get('example.name1');
        if (!$example)
        {
            $example = [
                'name' => 'tinyphp'
            ];
            $this->cache->set('example.name1', $example, 60);
        }
        $this->response->appendBody(var_export($example, TRUE));
    }
    
    /**
     * an example of using sessions
     */
    public function sessionAction()
    {
        $this->session['frameworksname'] = 'tinyphp';
        $fname = $this->session['frameworksname'];
        $this->response->appendBody($fname);
        
    }
}
?>