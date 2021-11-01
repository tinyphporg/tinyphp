<?php
/**
 * @Copyright (C), 2011-, King.
 * @Name: Profile.php
 * @Author: King
 * @Version: Beta 1.0
 * @Date: Sat Nov 12 23:16:52 CST 2011
 * @Description:主配置程序
 * @History:
 * <author> <time> <version > <desc>
 * King Fri Nov 18 00:20:44 CST 2011 Beta 1.0 第一次建立该文件
 */

$profile = [];

/**
 * 基本设置
 */
$profile['debug']['enabled'] = TRUE;      /*是否开启调试模式: bool FALSE 不开启 | bool TRUE 开启*/
$profile['timezone'] = 'PRC';  /*设置时区*/
$profile['charset'] = 'utf-8'; /*设置编码*/

/**
 * 异常模块
 */
$profile['exception']['enabled'] = TRUE;  /*异常处理:bool TRUE 注册Application实例为Tiny\Runtime的异常处理句柄| bool FALSE 默认不处理 */
$profile['exception']['log'] = TRUE;     /*是否以日志方式输出异常信息*/
$profile['exception']['logid'] = 'tinyphp_exception';  /*日志ID*/

/**
 * 自动加载引导类
 */
$profile['bootstrap']['enabled'] = TRUE;
$profile['bootstrap']['class'] = '\App\Common\Bootstrap';

/**
 * 打包器设置
 */
$profile['build']['enabled'] = TRUE;    /*不开启时 忽略build打包行为*/
$profile['build']['param_name'] = 'build'; /*--build参数 开启打包工作*/
$profile['build']['plugin'] = '\Tiny\MVC\Plugin\Builder';
$profile['build']['path'] = 'build/builder'; /*打包配置文件夹*/
$profile['build']['config_path'] = 'build/config';  /*打包器的设置文件夹，用来自定义application.config数据*/
$profile['build']['profile_path'] = 'build/profile';  /*打包器的属性文件夹,用来自定义application.properties数据*/

/**
 * 调试器设置
 */
$profile['debug']['param_name'] = 'debug';  //开启调试模式时: 命令行环境,--debug可开启调试模式; web环境下，检测到控制器为debug时，默认通过debug插件处理
$profile['debug']['class'] = '\Tiny\MVC\Plugin\Debug';

/**
 * 守护进程的基本设置
 */
$profile['daemon']['enabled'] = TRUE;
$profile['daemon']['id'] = 'tinyphp-daemon';          /*默认的daemonid*/
$profile['daemon']['plugin'] = '\Tiny\MVC\Plugin\Daemon';
$profile['daemon']['piddir'] = 'runtime/pid/'; /*守护进程pid目录*/
$profile['daemon']['logdir'] = 'runtime/log/'; /*守护进程的日志目录*/
$profile['daemon']['tick'] = 2;                /*检测子进程退出后的tick数 避免异常时大量创建操作系统进程引发崩溃*/

/**
 * 加载指定守护进程的配置参数  type
 *                     worker 运行指定次数退出的worker
 *                     timerworker 定时触发的worker 未实现
 *                     networker 监听各种端口的worker 未实现
*/
$profile['daemon']['policys'] = [
    'tinyphp-daemon' => [
        'workers' => [      //worker子进程配置
            ['id' => 'index', 'type' => 'worker' , 'args' => ['controller' => 'main', 'action' => 'index'], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '0.1']],
            ['id' => 'test', 'type' => 'worker' , 'args' => ['controller' => 'main', 'action' => 'test'], 'num' => 10, 'options' => ['runmax' => 1024, 'tick' => '1']]
        ],
        'options' => [],
    ],
];


/**
 * application配置模块设置
 */
$profile['config']['enabled'] = TRUE;   /* 是否开启默认配置模块 */
$profile['config']['path'] = 'config/'; /* 配置文件相对路径 */
$profile['config']['paths'] = [];       /*可加载多个扩展的配置文件或文件夹路径，必须为绝对或者相对路径 数据可覆盖*/
$profile['config']['cache']['enabled'] = TRUE; /*配置模块缓存设置 提高性能*/

/**
 * 语言模块设置
 */
$profile['lang']['enabled'] = TRUE;   /*是否开启 */
$profile['lang']['locale'] = 'zh_cn';
$profile['lang']['path'] = 'lang/';   /*存放语言包的目录 */
$profile['lang']['cache']['enabled'] = TRUE; /*配置模块缓存设置 提高性能*/

/**
 * 日志模块设置
 */
$profile['log']['enabled'] = TRUE;
$profile['log']['type'] = 'file';    /*默认可以设置file|syslog 设置类型为file时，需要设置log.path为可写目录路径 */
$profile['log']['path'] = 'runtime/log/';

/**
 * 数据模块设置
 * id为 default时，即为默认缓存实例
 *  driver mysql
 *  dirver mysqli
 *  dirver pdo_mysql
 *  driver redis
 *  driver memcache
 */
$profile['data']['enabled'] = TRUE;    /* 是否开启数据池 */
$profile['data']['charset'] = 'utf8';
$profile['data']['policys'] = [
    ['id' => 'default', 'driver' => 'db.mysql_pdo', 'host' => '127.0.0.1', 'port' => '3306', 'user' => 'root', 'password' => '123456', 'dbname' => 'mysql'],
    ['id' => 'redis', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379' ],
    ['id' => 'redis_cache', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379', 'servers' => [['host' => '127.0.0.1', 'port' => '6379'],['host' => '127.0.0.1', 'port' => '6379']]],
	['id' => 'redis_session', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'redis_queue', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'memcached', 'driver' => 'memcached', 'host' => '127.0.0.1', 'port' => '11211']
];

/**
 * 缓存模块设置
 * id为 default时，即为默认缓存实例 可以用Cache::getInstance()使用 或者在controller以及Model中 直接以$this->cache使用
 * driver 
 *       driver=file     文件缓存  文件缓存填写相对application的路径，不允许绝对路径
 *       driver=memcache memcache缓存 dataid=data数据池driver=memcache配置ID
 *       driver=redis    Redis缓存    dataid=data数据池driver=redis配置ID
 */
$profile['cache']['enabled'] = TRUE; /* 是否默认开启缓存模块，若不开启，则以下设置无效 */
$profile['cache']['lifetime'] = 3600;
$profile['cache']['filepath'] = 'runtime/cache/'; /*文件缓存方式的缓存相对路径*/
$profile['cache']['policys'] = [
    ['id' => 'default', 'driver' => 'redis', 'lifetime' => 3600, 'dataid' => 'redis_cache'],
    ['id' => 'file', 'driver' => 'file', 'lifetime' => 3600, 'path' => '']
];

/**
 * HTTP SESSION设置
 * driver 为空 PHP自身Session
 * driver memcache Memcache
 * driver redis Redis作为Session */
$profile['session']['enabled'] = TRUE;
$profile['session']['domain'] = '';
$profile['session']['path'] = '/';
$profile['session']['expires'] = 36000;
$profile['session']['domain'] = '';
$profile['session']['driver'] = 'redis';
$profile['session']['dataid'] = 'redis_session';

/**
 * 过滤器配置
 */
$profile['filter']['enabled'] = TRUE;
$profile['filter']['web'] = '\Tiny\Filter\WebFilter';
$profile['filter']['console'] = '\Tiny\Filter\ConsoleFilter';
$profile['filter']['filters'] = [];

/**
 * HTTP COOKIE设置
 */
$profile['cookie']['domain'] = '';
$profile['cookie']['path'] = '/';
$profile['cookie']['expires'] = 3600;
$profile['cookie']['prefix'] = '';
$profile['cookie']['encode'] = FALSE;

/**
 * 控制器设置
 */
$profile['controller']['default'] = 'main';
$profile['controller']['param'] = 'c';
$profile['controller']['namespace'] = 'Controller';
$profile['controller']['console'] = 'Controller\Console';
$profile['controller']['rpc'] = 'Controller\RPC';

/**
 * 模型
 */
$profile['model']['namespace'] = 'Model';

/**
 * 动作设置
 */
$profile['action']['default'] = 'index';
$profile['action']['param'] = 'a';

/**
 * response输出JSON时 默认指定的配置ID
 */
$profile['response']['formatJsonConfigId'] = 'status';

/**
 * 视图设置
 * 视图引擎绑定
 * 通过扩展名绑定解析引擎
 * php PHP原生引擎
 * 类型 tpl Smarty模板引擎
 * 类型 htm Template模板引擎
 */
$profile['view']['src']     = 'views/';
$profile['view']['lang']['enabled'] = TRUE;

$profile['view']['compile'] = 'runtime/view/compile/';
$profile['view']['config']  = 'runtime/view/config/';
$profile['view']['assign'] = [];

$profile['view']['cache']['enabled'] = FALSE;
$profile['view']['cache']['dir']   = 'runtime/view/cache/';
$profile['view']['cache']['lifetime']   = 120;

// 设置视图引擎
$profile['view']['engines'] = [
    ['engine' => '\Tiny\MVC\View\Engine\Template', 'ext' => ['html', 'htm'], 'config' => [
        'plugins' => [
            ['plugin' => '\Tiny\MVC\View\Engine\Template\Url' , 'config' => []]
        ]
    ]],
    ['engine' => '\Tiny\MVC\View\Engine\Smarty', 'ext' => ['tpl'], 'config' => []],
    ['engine' => '\Tiny\MVC\View\Engine\PHP', 'ext' => ['php'], 'config' => []],
];

// 设置视图助手
$profile['view']['helpers'] = [
    ['helper' => '\Tiny\MVC\View\Helper\MessageBox', 'config' => []]
];


/**
 * 路由规则设置
 */
$profile['router']['enabled'] = TRUE; /* 是否开启router */
$profile['router']['routers'] = [];   /*注册自定义的router*/
$profile['router']['rules'] = [
    ['router' => 'pathinfo', 'rule' => ['ext' => '.html'], 'domain' => '*.tinycn.com'],
    ];

/**
 * 是否开启插件
 */
$profile['plugin']['enabled'] = FALSE;

/**
 * 应用基本设置
 */
$profile['app']['namespace'] = 'App';        /*命名空间*/
$profile['app']['resources'] = 'resource/';  /*资源文件夹*/
$profile['app']['runtime'] = 'runtime/';     /*运行时文件夹*/
$profile['app']['tmp'] = 'runtime/tmp/';     /*临时文件夹*/

/**
 * application的源码设置
 */
$profile['src']['path'] = '';             /*源码路径*/
$profile['src']['global'] = 'libs/global/';       /*全局类*/
$profile['src']['library'] = 'libs/vendor/';       /*外部引入实例库*/
$profile['src']['controller'] = 'controllers/web/'; /*控制类*/
$profile['src']['model'] = 'models/';           /*模型类*/
$profile['src']['console'] = 'controllers/console/';        /*命令行控制类*/
$profile['src']['rpc'] = 'controllers/rpc/';               /*rpc控制类*/
$profile['src']['common'] = 'libs/common/';         /*通用类*/
$profile['src']['view'] = 'views/';             /*视图源码*/


$profile['view']['bootstrap']['enabled'] = TRUE;

/**
 * 需要添加绝对路径APPLICATION_PATH的配置项
 */
$profile['path'] = [
            'src.path',
            'app.assets',
            'build.path',
            'build.profile_path',
            'build.config_path',
            'config.path',
            'lang.path',
            'log.path',
            'cache.path',
            'view.src',
            'view.cache.dir',
            'view.compile',
            'view.config',
            'src.library',
            'src.global',
			'src.controller',
			'src.console',
			'src.rpc',
			'src.model',
			'src.common',
            'daemon.piddir',
            'daemon.logdir'
];

/**
 * 自动加载库的配置
 */

$profile['autoloader']['librarys'] = [
		'App\Controller' => 'src.controller',
		'App\Controller\Console' => 'src.console',
		'App\Controller\Rpc' => 'src.rpc',
		'App\Model' => 'src.model',
		'App\Common' => 'src.common',
		'*' => 'src.global',
];
$profile['autoloader']['no_realpath'] = FALSE;   /*是否替换加载库的路径为真实路径 phar兼容性*/
?>
