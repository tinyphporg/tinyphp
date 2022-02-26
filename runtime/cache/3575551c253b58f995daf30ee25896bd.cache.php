<?php
 return array (
  'expriation' => 1645866568,
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
        'b' => 'b',
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
        'eventListener' => 'Tiny\\MVC\\Event\\Listener\\DebugEventListener',
        'cache' => 
        array (
          'enabled' => true,
        ),
        'console' => false,
      ),
      'timezone' => 'PRC',
      'charset' => 'utf-8',
      'container' => 
      array (
        'config_path' => 'containers/',
      ),
      'exception' => 
      array (
        'enabled' => true,
        'log' => true,
        'logid' => 'tinyphp_exception',
      ),
      'app' => 
      array (
        'namespace' => 'App',
      ),
      'event' => 
      array (
        'enabled' => true,
        'listeners' => 
        array (
          'view-ui' => 'Tiny\\MVC\\View\\UI\\UITemplateEventLister',
        ),
      ),
      'bootstrap' => 
      array (
        'enabled' => true,
        'eventListeners' => 'App\\Common\\Bootstrap',
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
              'regex' => '/main\\/index-(\\d+)-12-112-112\\.html/',
              'keys' => 
              array (
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
      'builder' => 
      array (
        'enabled' => true,
        'param_name' => 'build',
        'eventListener' => 'Tiny\\MVC\\Event\\Listener\\BuilderEventListener',
        'path' => 'build/builder',
        'config_path' => 'build/config',
        'profile_path' => 'build/profile',
      ),
      'daemon' => 
      array (
        'enabled' => true,
        'id' => 'tinyphp-daemon',
        'eventListener' => 'Tiny\\MVC\\Event\\Listener\\DaemonEventListener',
        'piddir' => '{runtime}/pid/',
        'logdir' => '{runtime}/log/',
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
        'paths' => 
        array (
        ),
        'cache' => 
        array (
          'enabled' => true,
          'cache_id' => 'php',
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
        'path' => '{runtime}/cache/',
        'default_id' => 'default',
        'storagers' => 
        array (
        ),
        'config' => 
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
      'session' => 
      array (
        'enabled' => true,
        'domain' => '',
        'path' => '/',
        'expires' => 36000,
        'adapter' => 'memcached',
        'dataid' => 'memcached',
      ),
      'filter' => 
      array (
        'enabled' => true,
        'web' => '\\Tiny\\Filter\\WebFilter',
        'console' => '\\Tiny\\Filter\\ConsoleFilter',
        'filters' => 
        array (
        ),
      ),
      'cookie' => 
      array (
        'domain' => '',
        'path' => '/',
        'expires' => 3600,
        'prefix' => '',
        'encode' => false,
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
      ),
      'model' => 
      array (
        'namespace' => 'Model',
        'src' => 'models/',
      ),
      'action' => 
      array (
        'default' => 'index',
        'param' => 'a',
      ),
      'response' => 
      array (
        'formatJsonConfigId' => 'status',
      ),
      'view' => 
      array (
        'src' => 'views/',
        'template_dirname' => 'default',
        'lang' => 
        array (
          'enabled' => true,
        ),
        'compile' => '{runtime}/view/compile/',
        'config' => '{runtime}/view/config/',
        'assign' => 
        array (
        ),
        'cache' => 
        array (
          'enabled' => false,
          'dir' => '{runtime}/view/cache/',
          'lifetime' => 120,
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
          'template_plugin' => 'Tiny\\MVC\\View\\UI\\UIViewTemplatePlugin',
          'helper' => 'Tiny\\MVC\\View\\UI\\UIViewHelper',
          'template_dirname' => '../vendor/saasjit/tinyphp-ui/templates/',
          'dev_enabled' => true,
          'dev_public_path' => 'http://127.0.0.1:8080/js/tinyphp-ui.js',
          'installer' => 
          array (
            'param_name' => 'ui-install',
            'frontend_path' => 'tinyphp-ui/',
            'eventListener' => 'Tiny\\MVC\\View\\UI\\UIInstaller',
            'config_path' => 'config/tinyphp-ui.php',
          ),
        ),
        'bootstrap' => 
        array (
          'enabled' => true,
        ),
      ),
      'src' => 
      array (
        'path' => '{app}',
        'resources' => '{app}../resource/',
        'runtime' => '{app}../runtime/',
        'tmp' => '{runtime}tmp/',
        'global' => 'libs/global/',
        'library' => 'libs/vendor/',
        'controller' => 'controllers/web/',
        'model' => 'models/',
        'console' => 'controllers/console/',
        'rpc' => 'controllers/rpc/',
        'common' => 'libs/common/',
        'view' => 'views/',
        'aclass' => 'libs/common/a.php',
      ),
      'path' => 
      array (
        0 => 'src.path',
        1 => 'src.runtime',
        2 => 'src.resources',
        3 => 'src.tmp',
        4 => 'builder.path',
        5 => 'builder.profile_path',
        6 => 'builder.config_path',
        7 => 'config.path',
        8 => 'lang.path',
        9 => 'log.path',
        10 => 'cache.path',
        11 => 'view.src',
        12 => 'view.cache.dir',
        13 => 'view.compile',
        14 => 'view.config',
        15 => 'view.ui.template_dirname',
        16 => 'src.library',
        17 => 'src.global',
        18 => 'src.controller',
        19 => 'src.console',
        20 => 'src.rpc',
        21 => 'src.model',
        22 => 'src.common',
        23 => 'daemon.piddir',
        24 => 'daemon.logdir',
        25 => 'container.config_path',
        26 => 'src.aclass',
      ),
      'autoloader' => 
      array (
        'namespaces' => 
        array (
          'App\\Controller' => 'src.controller',
          'App\\Controller\\Console' => 'src.console',
          'App\\Controller\\Rpc' => 'src.rpc',
          'App\\Model' => 'src.model',
          'App\\Common' => 'src.common',
          '*' => 'src.global',
        ),
        'classes' => 
        array (
          'App\\C\\A' => 'src.aclass',
        ),
        'is_realpath' => false,
      ),
    ),
  ),
);
?>