<?php

use Tiny\Cache\Storager\SingleCache;

/**
 * @Copyright (C), 2011-, King.
 * @Name: Profile.php
 * @Author: King
 * @Version: Beta 1.0
 * @Date: Sat Nov 12 23:16:52 CST 2011
 * @Description: 
 *      application的Properties实例所加载的配置文件
 * @History:
 * <author> <time> <version > <desc>
 * King Fri Nov 18 00:20:44 CST 2011 Beta 1.0 第一次建立该文件
 * King 2022-3-12 stable 2.0 修改
 */

$profile = [];

/**
 * 基本设置
 * 
 * debug.enabled 是否开启debug模式
 *      false 不开启 适用于生产环境，必须强制关闭
 *      true 开启 适用于dev环境
 *      在控制器/模型中，使用$this->setDebug(false) 手动关闭
 *      其他地方，可通过Tiny::getApplication()->isDebug = false 关闭
 *      
 *  timezone 
 *      时区 默认为东八区北京时间
 *  
 *  charset 
 *      输出编码
 *
 *  namespace
 *      应用实例下，所有命名空间的统一前缀
 *      多个项目时，可单独命名区分
 */
$profile['debug']['enabled'] = true;
$profile['timezone'] = 'PRC';
$profile['charset'] = 'utf-8';
$profile['namespace']= 'App';

/**
 * application的容器设置
 * 
 * 主要实现依赖注入
 *  
 * 注解注入：@autowired
 *          class的注释中 包括@autowired 即可自动加载依赖并实例化
 *          成员属性/成员函数的注释中，包括@autowired ，即可在实例化时自动运行
 *          
 * 参数注入： 
 *          构造函数自动解析参数，从容器中获取实例，并注入
 *          调用函数时自动解析参数，从容器中获取实例并注入
 * 
 *  container.enabled 
 *      当前application是否开启容器加载
 *  
 *  container.provider_path 容器配置路径
 *      array [file|dir] 设置多个容器路径
 *      string file  设置单个文件为容器配置文件
 *      string dir   设置单个路径为容器配置文件集合
 *  
 *  container.autowired
 *      是否启用容器自动注解
 * 
 */
$profile['container']['enabled'] = true;
$profile['container']['provider_path'] = 'containers/';
$profile['container']['autowired'] = true;
$profile['container']['alias'] = [];
$profile['container']['definitions'] = [];

/**
 * application的异常处理
 * 
 * exception.enabled 开启application的异常处理
 *      true 设置application实例为异常处理句柄，监听异常事件并处理
 *      false 通过runtime默认异常处理
 * 
 * exception.log 异常日志
 *      true 开启 异常输出到日志中
 *      false 关闭输出
 * 
 * exception.logid 默认的异常日志id 
 *      如果是文件存储，则保留在runtime/log文件夹下，以logid命名的日志文件中
 */
$profile['exception']['enabled'] = true;
$profile['exception']['log'] = true;
$profile['exception']['logid'] = 'tinyphp_exception';

/**
 * 事件处理机制
 * 
 * EventManager
 *      事件管理器基于runtime中初始化，引入到application实例中，，主要应用在异常事件处理，和MVC的控制器事件处理
 *      
 * event.enabled 
 *      true 开启 false 关闭 则所有插件都受影响
 *  
 *  event.listeners 监听器设置
 *      listener 需为实现或者继承了EventLister接口的类
 */
$profile['event']['enabled'] = true;
$profile['event']['listeners'] = [];

/**
 * 模块化路由
 */
$profile['module']['enabled'] = true;
$profile['module']['event_listener'] = \Tiny\MVC\Module\ModuleManager::class;
$profile['module']['path'] = ['modules/', '../vendor/opensaas'];
$profile['module']['activated_modules'] = ['opensaas'];
$profile['module']['default'] = '';
$profile['module']['param'] = 'm';

/**
 * 打包器
 * 
 * 仅在命令行环境下
 * 
 * builder.enabled 是否开启单文件打包器
 *      true 开启  false 关闭监听
 *      
 * builder.param_name 参数名
 *      php public/index --build 即可开启单文件打包
 *      
 * builder.event_listener 打包器监听事件类
 *      监听到输入参数  --build，即开始初始化打包器
 *      
 * builder.path   打包器的配置文件夹 
 *      根据配置文件打包
 * 
 * builder.config_path 
 *      附加到单文件执行时的application的配置数据
 * 
 * builder.profile_path 
 *      附加到单文件执行时的application的propertis数据
 *            
 */
$profile['builder']['enabled'] = true;
$profile['builder']['param_name'] = 'build';
$profile['builder']['event_listener'] = \Tiny\MVC\Event\BuilderEventListener::class;
$profile['builder']['path'] = 'build/builder';
$profile['builder']['config_path'] = 'build/config';
$profile['builder']['profile_path'] = 'build/profile';

/**
 * 调试器
 * 
 * debug.enabled 默认开启
 *      true 开启 应用于开发环境 | false 关闭 应用于线上环境
 *      
 * debug.event_listener  
 *      监听事件并处理的调试器事件监听
 *     
 * debug.param_name 
 *      console环境下，监听到--debug命令行参数，即开启调试信息输出
 *      web环境下，监听到控制器=debug时，即输出debug调试信息
 *           
 * debug.console 仅在web环境下生效
 *      输出debug信息到浏览器的console控制台
 */
$profile['debug']['param_name'] = 'debug';
$profile['debug']['event_listener'] = \Tiny\MVC\Event\DebugEventListener::class;
$profile['debug']['cache']['enabled'] = true;
$profile['debug']['console'] = false;

/**
 * 守护进程的基本设置
 * 
 * 仅在命令行模式下生效
 * 
 * daemon.enabled 
 *      是否开启自动监听Daemon的命令行参数监听
 * 
 * daemon.id 默认启动的服务ID
 *      id 即 daemon.policys数组里的key
 *      
 * daemon.event_listener Daemon事件监听器
 *      监听D命令行的-d --daemon参数 并实例化Daemon
 *    
 *  daemon.piddir 
 *      守护进程的PID保存目录
 *      
 *  daemon.tick 
 *      默认子进程退出后重建的间隔    
 *      
 *  daemon.daemons 配置服务数组
 *      daemonid => [
 *          workers,子进程配置
 *          options => 附加给当前服务实例的选项
 *      ]
 *      workers的配置: 【
 *          id => worker的身份标识
 *          type => worker worker类型，默认为限定循环执行的子进程模式
 *          dispatcher => 代理执行worker进程的控制器和动作参数
 *          num => 子进程的数量
 *          options => [] 附加给worker实例的参数
 *              type = worker: 
 *                  options => [
 *                  runmax => 最大运行次数，避免内存占用过多系统阻塞
 *                  tick  => 重建子进程的间隔 
 *              ]
 *      】
 */
$profile['daemon']['enabled'] = true;
$profile['daemon']['id'] = 'tinyphp-daemon';
$profile['daemon']['event_listener'] = \Tiny\MVC\Event\DaemonEventListener::class;
$profile['daemon']['piddir'] = '{runtime}/pid/';
$profile['daemon']['tick'] = 2;
$profile['daemon']['daemons'] = [
    'tinyphp-daemon' => [
        'workers' => [
           ['id' => 'index', 'type' => 'worker' , 'dispatcher' => ['controller' => 'main', 'action' => 'index', "module" => ''], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '10']],
    //        ['id' => 'test', 'worker' => 'worker' , 'dispatcher' => ['controller' => 'user', 'action' => 'login', 'module' => 'opensaas'], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '1']]
        ],
        'options' => [],
    ],
];


/**
 * Application的配置实例
 * 
 * config.enabled 是否开启配置实例化
 *      true 开启 | false 关闭
 *  
 * config.path 配置文件的相对路径
 *      array [file|dir] 可配置多个路径
 *      string file      单个配置文件路径
 *      string dir       文件夹路径
 * 
 * config.cache.enabled 是否缓存配置
 *      开启缓存，将读取所有配置文件并解析后，缓存至本地PHP文件
 *      配置文件内严禁函数，类等命名和操作，否则缓存数据无法解析      
 * 
 */
$profile['config']['enabled'] = true;
$profile['config']['path'] = 'config/';
$profile['config']['cache']['enabled'] = true;

/**
 * Application的语言包设置
 * 
 * lang.enabled 开启语言包实例化
 *   
 * lang.locale 默认语言包
 *      zh_cn 中文语言包
 *  
 *  lang.path 存放语言包配置文件的路径
 *      路径配置同config
 *      
 * lang.cache.enabled 开启缓存
 *      开启将所有语言包数据缓存
 */
$profile['lang']['enabled'] = true;          // 是否开启
$profile['lang']['locale'] = 'zh_cn';        // 默认语言包
$profile['lang']['path'] = 'lang/';          // 存放语言包的目录
$profile['lang']['cache']['enabled'] = true; // 配置模块缓存设置 提高性能


/**
 * application的日志配置
 * 
 * log.enabled 开启日志处理
 * 
 * log.wirter 日志写入器
 *      file 写入到本地文件
 *      syslog 通过系统syslog函数写入到系统文件夹
 *      rsyslog 通过rsyslog协议，写入到远程文件夹
 */
$profile['log']['enabled'] = true;
$profile['log']['writer'] = 'file';    /*默认可以设置file|syslog 设置类型为file时，需要设置log.path为可写目录路径 */
$profile['log']['path'] = '{runtime}/log/';

/**
 * 数据资源池配置
 *  
 *  data.enabled 开启数据资源池
 *      true 开启|false 关闭
 *  
 *  data.charset 数据库默认连接编码
 *      utf8 默认utf8
 *      false 无需自动设置编码
 *      utf8mb4 兼容表情包
 *  
 *   data.default_id 默认ID
 *      默认调用datasource的ID
 *  
 *  data.drivers 驱动数组
 *  
 *  data.sources 数据资源池配置   
 *      driver = db.mysqli|db.pdo| [
 *          id => 调用时使用的ID字段
 *          host 通用的远程资源
 *          prot 通用的远程端口
 *          password 通用密码
 *          dbname 数据库名称
 *      ]
 *      
 *      driver = redis [
 *          id => 调用时使用的ID字段
 *          host => 远程host 单独设置的host & prot 会合并到servers内
 *          port => 远程端口
 *          db => 选择的DB Index
 *          servers => [[host => 服务, port => 端口]]  
 *      ]
 *      
 *      driver = memcached [
 *          servers => [[host=> 服务地址, port=> 端口]]
 *          persistent_id => 共享实例的ID
 *          options => [选项]
 *      ]
 */
$profile['data']['enabled'] = true;    /* 是否开启数据池 */
$profile['data']['charset'] = 'utf8';
$profile['data']['default_id'] = 'default';
$profile['data']['drivers'] = [];
$profile['data']['sources'] = [
    ['id' => 'default', 'driver' => 'db.mysqli', 'host' => '127.0.0.1', 'port' => '3306', 'user' => 'root', 'password' => '123456', 'dbname' => 'mysql'],
    ['id' => 'redis', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379', 'db' => 0],
    ['id' => 'redis_cache', 'driver' => 'redis', 'servers' => [['host' => '127.0.0.1', 'port' => '6379']]],
	['id' => 'redis_session', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'redis_queue', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'memcached', 'driver' => 'memcached', 'servers' => [['host' => '127.0.0.1', 'port' => '11211']], 'persistent_id' => null, 'options' => []]
];

/**
 * Application的缓存设置
 * 
 *  cache.enabled 开始缓存
 *      true 开启  | false 关闭
 * 
 * cache.ttl 默认的缓存过期时间
 *      ttl 可单独设置
 * 
 * cache.dir 默认的本地文件缓存路径
 *      string dir 只可设置为文件夹
 *      
 * cache.default_id 默认的缓存资源ID
 *      $cache 将缓存实例当缓存调用时所调用的cacheID
 * 
 * cache.application 
 *      是否对application的lang container config等数据进行缓存
 * 
 * cache.storagers 缓存的存储器配置
 *      [
 *          key => value
 *          存储器ID => 存储器类全程
 *          'file' => \Tiny\Cache\File::class
 *      ]
 *      添加后，即可在cache.sources节点的storager引用
 *  
 *  cache.sources 缓存源
 *      本框架的远程缓存源通过datasource统一调度管理
 *      id => 调用缓存资源的ID
 *      storager = redis [
 *          options => [
 *              ttl => 默认过期时间
 *              dataid => 调用的data sources ID
 *          ]
 *      ]
 *      
 *      storager => memcached [
 *          options => [
 *              ttl => 默认的过期时间
 *              dataid => 调用的data source id
 *          ]
 *          
 *      ]
 *      
 *      storager => file [
 *          options =>
 *      ]
 */
$profile['cache']['enabled'] = true;
$profile['cache']['ttl'] = 3600;
$profile['cache']['dir'] = '{runtime}/cache/';
$profile['cache']['application_storager'] = SingleCache::class;
$profile['cache']['default_id'] = 'default';
$profile['cache']['storagers'] = [];
$profile['cache']['sources'] = [
   ['id' => 'default', 'storager' => 'redis', 'options' => ['ttl' => 3600, 'dataid' => 'redis_cache']],
    ['id' => 'memcached', 'storager' => 'memcached', 'options' => ['ttl' => 3600, 'dataid' => 'memcached']],
    ['id' => 'file', 'storager' => 'file', 'options' => ['ttl' => 3600, 'path' => '']],
   ['id' => 'php', 'storager' => 'php', 'options' => ['ttl' => 3600, 'path' => '']]
];

/**
 * application的过滤器配置
 * 
 * filter.enabled 开启过滤
 * 
 * filter.web WEB环境下的过滤器设置
 *      string classname 实现FilterInterface的过滤器
 *      array [filterInterface]
 * 
 * filter.console 命令行环境下的过滤器设置
 *      string classname 实现FilterInterface的过滤器
 *      array [filterInterface]
 * 
 * filter.filters 通用过滤器设置
 *      array [FilterInterface]
 */
$profile['filter']['enabled'] = true;
$profile['filter']['web'] = \Tiny\Filter\WebFilter::class;
$profile['filter']['console'] = \Tiny\Filter\ConsoleFilter::class;
$profile['filter']['filters'] = [];

/**
 * HTTP SESSION设置
 * 
 * 仅在WEB环境下有效
 * 
 * session.enabled 
 *      开启框架自动代理SESSION处理
 *      
 * session.domain 
 *      session cookie生效的域名设置     
 * 
 * session.path
 *      session cookie生效的路径设置
 *      
 *  session.expires 
 *      SESSION过期时间
 *  
 *  session.adapter SESSION适配器
 *      redis 以datasource的redis实例作为session适配器
 *      memcache 以datasource的rmemcached实例作为session适配器
 *  
 *  session.dataid
 *      根据session.adapter选择对应的data资源实例
 * */ 

$profile['session']['enabled'] = true;
$profile['session']['domain'] = '';
$profile['session']['path'] = '/';
$profile['session']['expires'] = 36000;
$profile['session']['adapter'] = 'memcached';
$profile['session']['dataid'] = 'memcached';

/**
 * HTTP COOKIE设置
 * 
 * 仅在web环境下生效
 * 
 * cookie.domain 
 *      默认的cookie生效域名
 * 
 * cookie.path 
 *      默认的cookie生效路径
 *      
 * cookie.expires
 *      默认的cookie过期时间
 *      
 *  cookie.prefix
 *      默认的cookie前缀
 *      
 *  cookie.encode
 *      cookie是否编码             
 */
$profile['cookie']['domain'] = '';
$profile['cookie']['path'] = '/';
$profile['cookie']['expires'] = 3600;
$profile['cookie']['prefix'] = '';
$profile['cookie']['encode'] = false;


/**
 * Application引导类
 * 
 * 通过监听引导事件触发
 * 
 * bootstrap.enabled 
 *      开启引导
 * 
 * bootstrap.event_listener
 *      string 实现Bootstrapevent_listener的类名
 *      array [实现Bootstrapevent_listener的类名]
 *      
 */
$profile['bootstrap']['enabled'] = true;
$profile['bootstrap']['event_listener'] = \App\Event\Bootstrap::class;

/**
 * Application的响应实例
 *      
 * response.formatJsonConfigId     
 *    response输出JSON时 默认指定的配置ID
 */
$profile['response']['formatJsonConfigId'] = 'status';


/**
 * Application的路由设置
 * 
 * router.enabled 开启路由
 *      true 开启 | false 关闭
 * 
 * router.routes 注册自定义的route 
 *      [
 *          routeid => route classname
 *      ]
 *      
 *  router.rules 注册的路由规则    
 *      [
 *          route = pathinfo [
 *              rule => [ext => 扩展名, domain => 适配域名]
 *          ]
 *          route = regex [
 *              rule => [regex => 匹配正则, keys => [匹配正则后替换的键值映射表，$1-9即regex匹配数组的索引值]]
 *          ]
 *      ]
 */
$profile['router']['enabled'] = true;  // 是否开启router
$profile['router']['routes'] = [];     // 注册自定义的route
$profile['router']['rules'] = [
    ['route' => 'pathinfo', 'rule' => ['ext' => '.html' , 'domain' => '*.tinycn.com']],
];


/**
 * Application的控制器配置
 * 
 *  controller.namespace 相对Application命名空间的命名空间配置 
 *      default Controller Web环境下的控制器命名空间, 如App的命名空间为\App, 即\App\Controller
 *      console Console\Console 命令行下的相对控制器命名空间
 *      rpc    Controller\Rpc 
 *      
 *  controllr.src  
 *      控制器的源码加载目录
 *      
 *  controller.default  
 *      默认的控制器名称
 *      
 *  controller.param 
 *      默认的控制器参数
 *      
 * controller.action_default 
 *      默认的控制器动作名称
 * 
 * controller.action_param 
 *      默认的控制器动作参数              
 *          
 */
$profile['controller']['namespace']['default'] = 'Controller';
$profile['controller']['namespace']['console'] = 'Controller\Console';
$profile['controller']['namepsace']['rpc'] = 'Controller\RPC';
$profile['controller']['src'] = 'controller/';
$profile['controller']['default'] = 'main';
$profile['controller']['param'] = 'c';
$profile['controller']['action_default'] = 'index';
$profile['controller']['action_param'] = 'a';

/**
 * Application的模型层设置
 * 
 * model.namespace 
 *      相对app.namespace下的模型层命名空间  如\App\Model
 *      
 * model.src  模型层的存放目录
 */
$profile['model']['namespace'] = 'Model';
$profile['model']['src'] = 'models/';

/**
 * 视图设置
 * 
  *  默认模板解析的扩展名列表
 *      .php PHP原生引擎
 *      .tpl Smarty模板引擎
 *      .htm|.html Template模板引擎
 * 
 * view.src 
 *      视图模板存放的根目录
 *      example: application/views/
 *      
 * template_dirname
 *      视图模板目录下的默认存放子级目录
 *          example: views/default/
 * 
 * lang.enabled
 *      是否加载对应的语言包子级目录
 *      example: views/zh_cn/ 查找不到后，去默认模板目录里views/default/寻找
 *      
 * view.compile  
 *      视图模板编译后的存放目录
 * 
 * view.config 
 *      视图模板的配置存放目录
 * 
 * view.assign 
 *      视图模板的预先加载配置数组
 * 
 * view.engines 视图引擎配置
 *      engine => 视图模板解析类名
 *      ext => []  可解析的模板文件扩展名数组
 *      config => [] 引擎初始化时的配置
 *      
 *      Example: Template引擎的插件配置
 *          engine => \Tiny\MVC\View\Engine\Template:
 *          config => [plugins => [
 *              'plugin' => '\Tiny\MVC\View\Engine\Template\Url' , 'config' => []
 *      ]]
 *      
 * view.helper 视图助手配置
 *      helper => classname 助手类名
 *      config => [] 助手初始化时的配置
 *  
 *  view.cache.enabled 是否开启视图缓存
 *      默认不开启
 *  
 *  view.cache.dir 缓存目录
 *  view.cache.ttl 缓存过期时间    
 * 
 *      
 */
$profile['view']['basedir'] = 'views/';
$profile['view']['theme'] = 'default';
$profile['view']['lang'] = true;
$profile['view']['paths'] = [];
$profile['view']['compile'] = '{runtime}/view/compile/';
$profile['view']['config']  = '{runtime}/view/config/';
$profile['view']['assign'] = [];

// 引擎和助手配置
$profile['view']['engines'] = [];
$profile['view']['helpers'] = [];


/**
 * View 前端库设置
 *      
 * view.ui.enabled 开启
 *      true 开启前确认是否通过composer/框架加载，引入了opensaas/tinyphp-ui库
 * 
 * view.ui.public_path 在前端源码展示的公共路径
 *      根目录下的绝对路径 /tinyphp-ui
 *      包含域名的绝对路径 demo.xxx.com/tinyphp-ui/
 *  
 *  view.ui.inject
 *      是否自动将ui库的公共路径，注入到html源码
 *      仅支持engine = template时
 *  
 *  view.ui.helper 
 *      ui前端库在view注册的助手类
 *      message 提示消息体
 *      pagination 分页
 *      
 * view.ui.template_dirname 
 *      UI库的视图模板路径
 * 
 *  view.ui.dev_enabled 是否开启UI调试
 *      必须在tinyphp-ui 运行npm run dev后开启调试模式
 *  
 *  view.ui.dev_public_path 
 *      调试库在前端展现的URL
 *  
 *  view.ui.dev_event_listener 
 *      开启调试后的监听事件类
 * 
 * view.ui.installer ui自动安装器
 *      运行在每次composer更新时
 * 
 * view.ui.installer.param_name 
 *      监听的命令行参数
 * 
 * view.ui.installer.frontend_path 
 *      前端安装路径
 * 
 * view.ui.installer.event_listener 
 *      安装器的监听事件触发类
 */
$profile['view']['ui']['enabled'] = true;
$profile['view']['ui']['public_path'] = '/tinyphp-ui/';
$profile['view']['ui']['inject'] = true;
$profile['view']['ui']['template_plugin'] = \Tiny\MVC\View\UI\Template\UIViewTemplatePlugin::class;
$profile['view']['ui']['helper'] = \Tiny\MVC\View\UI\Helper\UIViewHelper::class;
$profile['view']['ui']['template_dirname'] = '{vendor}/opensaas/tinyphp-ui/templates/';

// UI前端库的开发设置
$profile['view']['ui']['dev_enabled'] = true;
$profile['view']['ui']['dev_public_path'] = "http://127.0.0.1:8080/js/tinyphp-ui.js";
$profile['view']['ui']['dev_event_listener'] =  \Tiny\MVC\View\UI\EventListener\UIDebugEventListener::class;

// UI composer更新时，检测UI并自动安装到public目录下
$profile['view']['ui']['installer']['param_name'] = 'ui-install';
$profile['view']['ui']['installer']['frontend_path'] = 'tinyphp-ui/';
$profile['view']['ui']['installer']['event_listener'] = \Tiny\MVC\View\UI\EventListener\UIInstallerEventListener::class;

/**
 * application的路径设置
 * 
 *  {app} 默认为APPLICATION_PATH
 *  每个src.nodename可作为标签{nodename}按顺序在后续的路径中被自动替换
 *  
 * src.path  
 *      application的根路径
 *      
 * src.resources 
 *      资源文件的存放目录 一般与application目录平行
 *      
 * src.runtime 
 *      运行时文件存放目录
 *      
 * src.tmp 
 *      运行时的临时文件夹
 *      
 * src.global 
 *      存放全局类的文件夹
 */
$profile['src']['path'] = '{app}';                    // application源码路径
$profile['src']['resources'] = '{app}../resource/';   // 资源文件夹
$profile['src']['runtime'] = '{app}../runtime/';      // 运行时文件夹
$profile['src']['tmp'] = '{runtime}tmp/';             // 临时文件夹
$profile['src']['global'] = 'librarys/global/';           // 存放全局类的文件夹
$profile['src']['library'] = 'librarys/';          // 除了composer外，引入的其他项目的库文件夹
$profile['src']['controller'] = 'controllers/web/';   // web环境下的控制器类文件夹
$profile['src']['model'] = 'models/';                 // 模型类文件夹
$profile['src']['console'] = 'controllers/console/';  // 命令行环境下的控制器类文件夹
$profile['src']['rpc'] = 'controllers/rpc/';          // rpc模式下的控制器类文件夹
$profile['src']['view'] = 'views/';                   // 存放、、】视图模板的文件夹
$profile['src']['vendor'] = '{app}../vendor/';
$profile['src']['event'] = 'events/';
$profile['src']['common'] = 'librarys/common/';
/**
 * 需要做路径处理的路径节点列表
 *      [propertis.nodename...]
 *      作为路径传递的配置节点名，在相对路径前添加application_path的绝对路径，并替换src里的标签,./,../,相对路径等。
 */
$profile['path'] = [
            'src.path',
            'src.runtime',
            'src.resources',
            'src.tmp',
            'src.vendor',
            'builder.path',
            'builder.profile_path',
            'builder.config_path',
            'config.path',
            'lang.path',
            'log.path',
            'cache.dir',
            'view.basedir',
            'view.cache.dir',
            'view.compile',
            'view.config',
            'view.ui.template_dirname',
            'src.library',
            'src.global',
			'src.controller',
			'src.console',
			'src.rpc',
			'src.model',
			'src.common',
            'src.event',
            'daemon.piddir',
            'daemon.logdir',
            'container.provider_path',
            'module.path',
];

/**
 * 自动加载类配置
 * xc v≈Ω
 * autoloader.namespaces 命名空间加载配置
 *      namespace => properties.path.nodes 
 *      
 *  autoloader.classes 类文件的加载配置
 *      classname => propertis.path.node
 *      
 * autoloader.is_realpath  是否绝对路径加载
 *      true 绝对路径加载
 *      false propertis.path里的路径加载
 */
$profile['autoloader']['namespaces'] = [
        'App' => 'src.library',
		'App\Controller' => 'src.controller',
		'App\Controller\Console' => 'src.console',
		'App\Controller\Rpc' => 'src.rpc',
		'App\Model' => 'src.model',
        'App\Event' => 'src.event',
        'App\Common' => 'src.common',
		'*' => 'src.global',
];
$profile['autoloader']['classes'] = [];
$profile['autoloader']['is_realpath'] = false;
?>
