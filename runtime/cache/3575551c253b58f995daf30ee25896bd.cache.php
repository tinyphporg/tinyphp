<?php
 return array (
  'expriation' => 1651984017,
  'value' => 
  array (
    'example' => 
    array (
      'custom' => 
      array (
        'name' => 'tinycn',
      ),
      'default' => 
      array (
        'b' => 'xxxbxxx',
      ),
      'setting' => 
      array (
        'client' => 
        array (
          'port' => '80',
          'name' => 'aaaaa12',
        ),
        'server' => 
        array (
          'db' => 
          array (
            'name' => 'mysql',
            'mysql' => 
            array (
              'host' => '127.0.0.1',
            ),
          ),
        ),
      ),
    ),
    'profile' => 
    array (
      'debug' => 
      array (
        'enabled' => true,
        'param_name' => 'debug',
        'event_listener' => 'Tiny\\MVC\\Event\\DebugEventListener',
        'cache' => 
        array (
          'enabled' => true,
        ),
        'console' => false,
      ),
      'timezone' => 'PRC',
      'charset' => 'utf-8',
      'namespace' => 'App',
      'container' => 
      array (
        'enabled' => true,
        'provider_path' => 'containers/',
        'autowired' => true,
      ),
      'exception' => 
      array (
        'enabled' => true,
        'log' => true,
        'logid' => 'tinyphp_exception',
      ),
      'event' => 
      array (
        'enabled' => true,
        'listeners' => 
        array (
        ),
      ),
      'module' => 
      array (
        'enabled' => true,
        'event_listener' => 'Tiny\\MVC\\Module\\ModuleManager',
        'path' => 
        array (
          0 => 'modules/',
          1 => '../vendor/opensaas',
        ),
        'activated_modules' => 
        array (
          0 => 'opensaas-pro',
          1 => 'system',
        ),
        'default' => '',
        'param' => 'm',
      ),
      'builder' => 
      array (
        'enabled' => true,
        'param_name' => 'build',
        'event_listener' => 'Tiny\\MVC\\Event\\BuilderEventListener',
        'path' => 'build/builder',
        'config_path' => 'build/config',
        'profile_path' => 'build/profile',
      ),
      'daemon' => 
      array (
        'enabled' => true,
        'id' => 'tinyphp-daemon',
        'event_listener' => 'Tiny\\MVC\\Event\\DaemonEventListener',
        'piddir' => '{runtime}/pid/',
        'tick' => 2,
        'policys' => 
        array (
          'tinyphp-daemon' => 
          array (
            'workers' => 
            array (
              0 => 
              array (
                'id' => 'index',
                'type' => 'worker',
                'dispatcher' => 
                array (
                  'controller' => 'main',
                  'action' => 'index',
                ),
                'num' => 1,
                'options' => 
                array (
                  'runmax' => 1024,
                  'tick' => '0.1',
                ),
              ),
              1 => 
              array (
                'id' => 'test',
                'type' => 'worker',
                'dispatcher' => 
                array (
                  'controller' => 'main',
                  'action' => 'test',
                ),
                'num' => 10,
                'options' => 
                array (
                  'runmax' => 1024,
                  'tick' => '1',
                ),
              ),
            ),
            'options' => 
            array (
            ),
          ),
        ),
      ),
      'config' => 
      array (
        'enabled' => true,
        'path' => 'config/',
        'cache' => 
        array (
          'enabled' => true,
        ),
      ),
      'lang' => 
      array (
        'enabled' => true,
        'locale' => 'zh_cn',
        'path' => 'lang/',
        'cache' => 
        array (
          'enabled' => true,
        ),
      ),
      'log' => 
      array (
        'enabled' => true,
        'writer' => 'file',
        'path' => '{runtime}/log/',
      ),
      'data' => 
      array (
        'enabled' => true,
        'charset' => 'utf8',
        'default_id' => 'default',
        'sources' => 
        array (
          0 => 
          array (
            'id' => 'default',
            'driver' => 'db.mysqli',
            'host' => '127.0.0.1',
            'port' => '3306',
            'user' => 'root',
            'password' => '123456',
            'dbname' => 'mysql',
          ),
          1 => 
          array (
            'id' => 'redis',
            'driver' => 'redis',
            'host' => '127.0.0.1',
            'port' => '6379',
            'db' => 0,
          ),
          2 => 
          array (
            'id' => 'redis_cache',
            'driver' => 'redis',
            'servers' => 
            array (
              0 => 
              array (
                'host' => '127.0.0.1',
                'port' => '6379',
              ),
            ),
          ),
          3 => 
          array (
            'id' => 'redis_session',
            'driver' => 'redis',
            'host' => '127.0.0.1',
            'port' => '6379',
          ),
          4 => 
          array (
            'id' => 'redis_queue',
            'driver' => 'redis',
            'host' => '127.0.0.1',
            'port' => '6379',
          ),
          5 => 
          array (
            'id' => 'memcached',
            'driver' => 'memcached',
            'servers' => 
            array (
              0 => 
              array (
                'host' => '127.0.0.1',
                'port' => '11211',
              ),
            ),
            'persistent_id' => NULL,
            'options' => 
            array (
            ),
          ),
        ),
      ),
      'cache' => 
      array (
        'enabled' => true,
        'ttl' => 3600,
        'dir' => '{runtime}/cache/',
        'default_id' => 'default',
        'storagers' => 
        array (
        ),
        'sources' => 
        array (
          0 => 
          array (
            'id' => 'default',
            'storager' => 'redis',
            'options' => 
            array (
              'ttl' => 3600,
              'dataid' => 'redis_cache',
            ),
          ),
          1 => 
          array (
            'id' => 'memcached',
            'storager' => 'memcached',
            'options' => 
            array (
              'ttl' => 3600,
              'dataid' => 'memcached',
            ),
          ),
          2 => 
          array (
            'id' => 'file',
            'storager' => 'file',
            'options' => 
            array (
              'ttl' => 3600,
              'path' => '',
            ),
          ),
          3 => 
          array (
            'id' => 'php',
            'storager' => 'php',
            'options' => 
            array (
              'ttl' => 3600,
              'path' => '',
            ),
          ),
        ),
      ),
      'filter' => 
      array (
        'enabled' => true,
        'web' => 'Tiny\\Filter\\WebFilter',
        'console' => 'Tiny\\Filter\\ConsoleFilter',
        'filters' => 
        array (
        ),
      ),
      'session' => 
      array (
        'enabled' => true,
        'domain' => '',
        'path' => '/',
        'expires' => 36000,
        'adapter' => 'memcached',
        'dataid' => 'memcached',
      ),
      'cookie' => 
      array (
        'domain' => '',
        'path' => '/',
        'expires' => 3600,
        'prefix' => '',
        'encode' => false,
      ),
      'bootstrap' => 
      array (
        'enabled' => true,
        'event_listener' => 'App\\Event\\Bootstrap',
      ),
      'response' => 
      array (
        'formatJsonConfigId' => 'status',
      ),
      'router' => 
      array (
        'enabled' => true,
        'routes' => 
        array (
        ),
        'rules' => 
        array (
          0 => 
          array (
            'route' => 'pathinfo',
            'rule' => 
            array (
              'ext' => '.html',
              'domain' => '*.tinycn.com',
            ),
          ),
          1 => 
          array (
            'route' => 'regex',
            'rule' => 
            array (
              'regex' => '/^\\/user\\/.*/i',
              'values' => 
              array (
                'module' => 'opensaas-pro',
                'controller' => 'main',
                'action' => 'index',
                'id' => '$1',
              ),
              'ext' => '.html',
              'domain' => '*.tinycn.com',
            ),
          ),
        ),
      ),
      'controller' => 
      array (
        'namespace' => 
        array (
          'default' => 'Controller',
          'console' => 'Controller\\Console',
        ),
        'namepsace' => 
        array (
          'rpc' => 'Controller\\RPC',
        ),
        'src' => 'controller/',
        'default' => 'main',
        'param' => 'c',
        'action_default' => 'index',
        'action_param' => 'a',
      ),
      'model' => 
      array (
        'namespace' => 'Model',
        'src' => 'models/',
      ),
      'view' => 
      array (
        'basedir' => 'views/',
        'theme' => 'default',
        'lang' => true,
        'paths' => 
        array (
        ),
        'compile' => '{runtime}/view/compile/',
        'config' => '{runtime}/view/config/',
        'assign' => 
        array (
        ),
        'engines' => 
        array (
        ),
        'helpers' => 
        array (
        ),
        'ui' => 
        array (
          'enabled' => true,
          'public_path' => '/tinyphp-ui/',
          'inject' => true,
          'template_plugin' => 'Tiny\\MVC\\View\\UI\\Template\\UIViewTemplatePlugin',
          'helper' => 'Tiny\\MVC\\View\\UI\\Helper\\UIViewHelper',
          'template_dirname' => '{vendor}/opensaas/tinyphp-ui/templates/',
          'dev_enabled' => true,
          'dev_public_path' => 'http://127.0.0.1:8080/js/tinyphp-ui.js',
          'dev_event_listener' => 'Tiny\\MVC\\View\\UI\\EventListener\\UIDebugEventListener',
          'installer' => 
          array (
            'param_name' => 'ui-install',
            'frontend_path' => 'tinyphp-ui/',
            'event_listener' => 'Tiny\\MVC\\View\\UI\\EventListener\\UIInstallerEventListener',
          ),
        ),
      ),
      'src' => 
      array (
        'path' => '{app}',
        'resources' => '{app}../resource/',
        'runtime' => '{app}../runtime/',
        'tmp' => '{runtime}tmp/',
        'global' => 'librarys/global/',
        'library' => 'librarys/',
        'controller' => 'controllers/web/',
        'model' => 'models/',
        'console' => 'controllers/console/',
        'rpc' => 'controllers/rpc/',
        'view' => 'views/',
        'vendor' => '{app}../vendor/',
        'event' => 'events/',
      ),
      'path' => 
      array (
        0 => 'src.path',
        1 => 'src.runtime',
        2 => 'src.resources',
        3 => 'src.tmp',
        4 => 'src.vendor',
        5 => 'builder.path',
        6 => 'builder.profile_path',
        7 => 'builder.config_path',
        8 => 'config.path',
        9 => 'lang.path',
        10 => 'log.path',
        11 => 'cache.dir',
        12 => 'view.basedir',
        13 => 'view.cache.dir',
        14 => 'view.compile',
        15 => 'view.config',
        16 => 'view.ui.template_dirname',
        17 => 'src.library',
        18 => 'src.global',
        19 => 'src.controller',
        20 => 'src.console',
        21 => 'src.rpc',
        22 => 'src.model',
        23 => 'src.common',
        24 => 'src.event',
        25 => 'daemon.piddir',
        26 => 'daemon.logdir',
        27 => 'container.config_path',
        28 => 'module.path',
      ),
      'autoloader' => 
      array (
        'namespaces' => 
        array (
          'App' => 'src.library',
          'App\\Controller' => 'src.controller',
          'App\\Controller\\Console' => 'src.console',
          'App\\Controller\\Rpc' => 'src.rpc',
          'App\\Model' => 'src.model',
          'App\\Event' => 'src.event',
          '*' => 'src.global',
        ),
        'classes' => 
        array (
        ),
        'is_realpath' => false,
      ),
    ),
  ),
);
?>