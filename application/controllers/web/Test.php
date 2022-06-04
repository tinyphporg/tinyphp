<?php 
/**
 *
 * @copyright (C), 2013-, King.
 * @name Test.php
 * @author King
 * @version stable 2.0
 * @Date 2022年6月4日下午3:47:22
 * @Class List class
 * @Function List function_container
 * @History King 2022年6月4日下午3:47:22 2017年3月8日下午4:20:28 0 第一次建立该文件
 */
 namespace App\Controller;
 
 use Tiny\MVC\Controller\Controller;
use App\Model\Main\UserInfo;
use Tiny\MVC\Web\HttpCookie;
use Tiny\MVC\Request\Param\Get;
use Tiny\Cache\Storager\PHP;
use Tiny\Config\Configuration;
use Tiny\Lang\Lang;
use Tiny\MVC\Web\HttpSession;
use Tiny\MVC\View\View;
use Tiny\Net\IpArea;
use App\Model\Main\User\UserInfoByRedis;
use Tiny\Cache\Cache;
use App\Common\Example;
                                                 
/**
*  测试类
*  
* @package App.Controller
* @since 2022年6月4日下午3:48:06
* @final 2022年6月4日下午3:48:06
*/
 class Test extends Controller
 {
     /**
      *  自动注解的方式加载类实例
      *
      * @autowired
      *
      * @var UserInfo
      */
     protected UserInfo $userinfoModel;
     
     /**
      *
      * @param HttpCookie $cookie Cookie操作实例
      * @param Get $get GET操作实例
      * @param UserInfo $userinfoModel 自动加载模型实例
      * @param PHP $cache 缓存操作实例
      * @param Configuration $config 配置操作实例
      * @param Lang $lang 语言包操作实例
      * @param HttpSession $session Session操作实例
      * @param View $view 视图操作实例
      */
     public function indexAction(Get $get,Lang $lang, HttpSession $session, HttpCookie $cookie, \App\Model\Main\User\UserInfo $userinfoModel, Configuration $config, Cache $cache, \Example $gexample, Example $cexample)
     {
         // session
         if (!$session['example']) {
             $session['example'] = 'tinyphp';
         }
         
         // $container->get('bootstrap');
         // cookie
         if (!$cookie['example']) {
             $cookie['example'] = '100';
         }
         
         // $request->get
         $actionName = $this->request->getActionName();
         $pageid = $this->request->get['pageid'];
         
         $controllerName = $this->request->getControllerName();
         
         // request->filter
         $name = $this->request->get->formatString('name', 'tinyphp');
         $isName = $this->request->get->isRequired('name') ? 'true' : 'false';
         
         $userInfo = $userinfoModel->getUsers();
         
         // cached
         $cached = $cache->get('aa');
         if (!$cached) {
             $cached = 'aaaax';
             $cache->set('aa', $cached);
         }
         
         $this->assign([
             'ip' => $this->request->ip,
             'iparea' => IpArea::get($this->request->ip),
             'actionName' => $actionName,
             'controllerName' => $controllerName,
             'name' => $name,
             'sessionExample' => $session['example'],
             'cookieExample' => $cookie['example'],
             'langExample' => $lang->translate('status.0', 'example'),
             'configExample' => $config['example.default.b'],
             'globalExample' => $gexample->get(),
             'commonExample' => $cexample->get(),
             'defName' => 'tinyphp',
             'isName' => $isName,
             'users' => $userInfo,
             'cached' => $cached,
             'pageid' => $pageid,
         ]);
         $this->display('test/index.htm');
     }

     
     /**
      * template php file
      */
     public function indexRedisAction(UserInfoByRedis $userinfoModel)
     {
         $actionName = $this->request->get->formatString('a');
         $controllerName = $this->request->get->formatString('c');
         $name = $this->request->get->formatString('name', 'tinyphp');
         $isName = $this->request->get->isRequired('name') ? 'true' : 'false';
         
         // 模型使用
         $userInfo = (array)$userinfoModel->getUsers();
         $this->assign([
             'actionName' => $actionName,
             'controllerName' => $controllerName,
             'name' => $name,
             'defName' => 'tinyphp',
             'isName' => $isName,
             'users' => $userInfo
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
     public function langAction(Lang $lang)
     {
         $frameworksName = $lang->translate('status.0', 'tinyphp');
         $this->response->outFormatJSON('0', $frameworksName, ['aaa']);
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
     public function cookieAction(HttpCookie $cookie, Lang $lang)
     {
         $cookie->set('frameworksName', $lang['status.0']);
         $frameworksName = $cookie->get('frameworksName');
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
         //Cache::getInstance();
         
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