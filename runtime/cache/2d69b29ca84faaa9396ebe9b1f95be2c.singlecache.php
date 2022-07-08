<?php
 return array (
  'expriation' => 1657265934,
  'value' => 
  array (
    'application.module' => 
    array (
      'tinyphp-demo' => 
      array (
        'profile' => 
        array (
          'name' => 'tinyphp-demo',
          'namespace' => 'Demo',
          'desc' => 'tinyphp的demo模块',
          'type' => 'module',
          'version' => '1.0.0',
          'init' => true,
          'index' => './src',
          'setting' => 
          array (
            'public_path' => '/static/tinyphp-demo/',
          ),
          'routes' => 
          array (
            0 => 
            array (
              'route' => 'pathinfo',
              'rule' => 
              array (
                'checkRegex' => '#^/(demo)#',
                'values' => 
                array (
                ),
              ),
            ),
          ),
          'autoloader' => 
          array (
            'ignores' => 
            array (
            ),
            'global' => './librarys/global/',
            'namespaces' => 
            array (
              'Demo' => './librarys/',
              'Demo\\Common' => './librarys/common/',
            ),
            'static' => 
            array (
              'web' => true,
              'paths' => 
              array (
              ),
            ),
          ),
          'config' => true,
          'lang' => true,
          'eventlistener' => 
          array (
            0 => 
            array (
              'class' => 'Demo\\Event\\Bootstrap',
              'priority' => 0,
            ),
          ),
          'require' => 
          array (
          ),
        ),
        'desc' => 'tinyphp的demo模块',
        'disabled' => false,
        'name' => 'tinyphp-demo',
        'basedir' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/',
        'index' => './src',
        'namespace' => 'Demo',
        'eventlistener' => 
        array (
          0 => 
          array (
            'class' => 'Demo\\Event\\Bootstrap',
            'priority' => 0,
          ),
        ),
        'version' => '1.0.0',
        'init' => true,
        'ignores' => 
        array (
        ),
        'errormsg' => '',
        'lang' => 
        array (
        ),
        'requires' => 
        array (
        ),
        'routes' => 
        array (
          0 => 
          array (
            'route' => 'pathinfo',
            'rule' => 
            array (
              'checkRegex' => '#^/(demo)#',
              'values' => 
              array (
              ),
              'module' => 'tinyphp-demo',
            ),
          ),
        ),
        'parsedPaths' => 
        array (
          'module.tinyphp-demo.config' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/config/',
          'module.tinyphp-demo.lang' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/lang/',
          'module.tinyphp-demo.controller' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/controllers/web/',
          'module.tinyphp-demo.controller_console' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/controllers/console/',
          'module.tinyphp-demo.model' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/models/',
          'module.tinyphp-demo.event' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/events/',
          'module.tinyphp-demo.view' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/',
          'module.tinyphp-demo.library' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/librarys/',
          'module.tinyphp-demo.global' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src//librarys/global',
        ),
        'path' => 
        array (
          'config' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/config/',
          'lang' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/lang/',
          'controller' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/controllers/web/',
          'controller_console' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/controllers/console/',
          'model' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/models/',
          'event' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/events/',
          'view' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/',
          'library' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/librarys/',
          'global' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src//librarys/global',
          'profile' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/',
          'basedir' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/',
          'indexdir' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/',
        ),
        'config' => 
        array (
          'custom' => 
          array (
            'name' => 'tinycn',
          ),
          'default' => 
          array (
            'modulename' => 'tinyphp-demo',
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
        'controllerNamespace' => 'Demo\\Controller',
        'namespaces' => 
        array (
          'Demo' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/librarys/',
          'Demo\\Controller' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/controllers/web/',
          'Demo\\Controller\\Console' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/controllers/console/',
          'Demo\\Model' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/models/',
          'Demo\\Event' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/events/',
          'Demo\\Common' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/librarys/common/',
          '*' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/librarys/global/',
        ),
        'static' => 
        array (
          'enabled' => false,
          'completed' => true,
          'web' => true,
          'paths' => 
          array (
          ),
        ),
        'activated' => true,
      ),
      'tinyphp-ui' => 
      array (
        'profile' => 
        array (
          'name' => 'tinyphp-ui',
          'namespace' => 'Tiny\\UI',
          'desc' => 'tinyphp前端UI库',
          'type' => 'module',
          'version' => '1.0.0',
          'init' => true,
          'index' => './src',
          'setting' => 
          array (
            'public_path' => '/static/tinyphp-ui/',
            'inject' => true,
            'template_plugin' => '\\Tiny\\MVC\\View\\UI\\Template\\UIViewTemplatePlugin',
            'helper' => '\\Tiny\\MVC\\View\\UI\\Helper\\UIViewHelper',
            'dev' => 
            array (
              'enabled' => true,
              'public_path' => 'http://127.0.0.1:8080/js/tinyphp-ui.js',
              'admin_public_path' => 'http://127.0.0.1:8080/js/tinyphp-ui.admin.js',
            ),
            'installer' => 
            array (
              'param_name' => 'ui-install',
              'install_path' => 'tinyphp-ui/',
              'event_listener' => '\\Tiny\\MVC\\View\\UI\\EventListener\\UIInstallerEventListener',
            ),
            'enabled' => true,
          ),
          'routes' => 
          array (
            0 => 
            array (
              'route' => 'pathinfo',
              'rule' => 
              array (
                'checkRegex' => '#^/(uitest)#',
                'values' => 
                array (
                ),
              ),
            ),
          ),
          'autoloader' => 
          array (
            'global' => NULL,
            'ignores' => 
            array (
              0 => 'Tiny\\UI\\Template\\UIViewTemplatePlugin',
              1 => 'Tiny\\UI\\Helper\\UIViewHelper',
            ),
            'static' => 
            array (
              'web' => true,
              'paths' => 
              array (
                0 => 
                array (
                  'from' => './dist',
                  'to' => './',
                  'exclude' => '',
                ),
              ),
            ),
            'namespaces' => 
            array (
              'Tiny\\UI\\A' => './libs/UI',
            ),
          ),
          'config' => true,
          'lang' => true,
          'eventlistener' => 
          array (
            0 => 
            array (
              'class' => 'Tiny\\UI\\Event\\UIEventListener',
              'priority' => -999,
            ),
          ),
          'require' => 
          array (
          ),
        ),
        'desc' => 'tinyphp前端UI库',
        'disabled' => false,
        'name' => 'tinyphp-ui',
        'basedir' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/',
        'index' => './src',
        'namespace' => 'Tiny\\UI',
        'eventlistener' => 
        array (
          0 => 
          array (
            'class' => 'Tiny\\UI\\Event\\UIEventListener',
            'priority' => -999,
          ),
        ),
        'version' => '1.0.0',
        'init' => true,
        'ignores' => 
        array (
          0 => 'Tiny\\UI\\Template\\UIViewTemplatePlugin',
          1 => 'Tiny\\UI\\Helper\\UIViewHelper',
        ),
        'errormsg' => '',
        'lang' => 
        array (
        ),
        'requires' => 
        array (
        ),
        'routes' => 
        array (
          0 => 
          array (
            'route' => 'pathinfo',
            'rule' => 
            array (
              'checkRegex' => '#^/(uitest)#',
              'values' => 
              array (
              ),
              'module' => 'tinyphp-ui',
            ),
          ),
        ),
        'parsedPaths' => 
        array (
          'module.tinyphp-ui.config' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/config/',
          'module.tinyphp-ui.lang' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/lang/',
          'module.tinyphp-ui.controller' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/controllers/web/',
          'module.tinyphp-ui.controller_console' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/controllers/console/',
          'module.tinyphp-ui.model' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/models/',
          'module.tinyphp-ui.event' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/events/',
          'module.tinyphp-ui.view' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/views/',
          'module.tinyphp-ui.library' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/librarys/',
          'module.tinyphp-ui.global' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src//librarys/global',
        ),
        'path' => 
        array (
          'config' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/config/',
          'lang' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/lang/',
          'controller' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/controllers/web/',
          'controller_console' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/controllers/console/',
          'model' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/models/',
          'event' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/events/',
          'view' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/views/',
          'library' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/librarys/',
          'global' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src//librarys/global',
          'profile' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/',
          'basedir' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/',
          'indexdir' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/',
        ),
        'config' => 
        array (
          'ui' => 
          array (
            'name' => 'system',
          ),
        ),
        'controllerNamespace' => 'Tiny\\UI\\Controller',
        'namespaces' => 
        array (
          'Tiny\\UI' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/librarys/',
          'Tiny\\UI\\Controller' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/controllers/web/',
          'Tiny\\UI\\Controller\\Console' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/controllers/console/',
          'Tiny\\UI\\Model' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/models/',
          'Tiny\\UI\\Event' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/events/',
          'Tiny\\UI\\A' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/libs/UI/',
          '*' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/librarys/global/',
        ),
        'static' => 
        array (
          'enabled' => true,
          'completed' => true,
          'web' => true,
          'paths' => 
          array (
            0 => 
            array (
              'from' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/dist/',
              'to' => '/data/workspace/tinyphp/public/static/tinyphp-ui/',
              'exclude' => '',
            ),
          ),
        ),
        'activated' => true,
      ),
    ),
    'application.config' => 
    array (
      'default' => 
      array (
        'frameworkName' => 'TinyPHP Framework',
        'version' => '2.0.0',
        'example' => 'tinyphp config example',
      ),
      'profile' => 
      array (
        'debug' => 
        array (
          'enabled' => true,
          'event_listener' => 'Tiny\\MVC\\Event\\DebugEventListener',
          'param_name' => 'debug',
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
          'provider_path' => 'containers/',
          'alias' => 
          array (
          ),
          'definitions' => 
          array (
          ),
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
        'src' => 
        array (
          'path' => '{app}',
          'public' => '{app}../public/',
          'static' => '{public}static/',
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
          'common' => 'librarys/common/',
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
          'daemons' => 
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
                    'module' => '',
                  ),
                  'num' => 1,
                  'options' => 
                  array (
                    'runmax' => 1024,
                    'tick' => '10',
                  ),
                ),
                1 => 
                array (
                  'id' => 'test',
                  'worker' => 'worker',
                  'dispatcher' => 
                  array (
                    'controller' => 'main',
                    'action' => 'test',
                    'module' => '',
                  ),
                  'num' => 1,
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
          'drivers' => 
          array (
          ),
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
          'application_storager' => 'Tiny\\Cache\\Storager\\SingleCache',
          'application_ttl' => 60,
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
          'adapter' => 'redis',
          'dataid' => 'redis',
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
                'domain' => '*',
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
          'static' => 
          array (
            'basedir' => '{static}',
            'public_path' => '/static/',
            'engine' => true,
            'minsize' => 2048,
            'exts' => 
            array (
              0 => 'css',
              1 => 'js',
              2 => 'png',
              3 => 'jpg',
              4 => 'gif',
            ),
          ),
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
            'App\\Common' => 'src.common',
            '*' => 'src.global',
          ),
          'classes' => 
          array (
          ),
          'is_realpath' => false,
        ),
        'module' => 
        array (
          'enabled' => true,
          'event_listener' => 'Tiny\\MVC\\Module\\ModuleManager',
          'path' => 
          array (
            0 => '{app}modules/',
            1 => '{app}../vendor/tinyphporg',
          ),
          'disabled_modules' => 
          array (
          ),
          'activated_modules' => 
          array (
          ),
          'default' => '',
          'param' => 'm',
          'static' => 
          array (
            'enabled' => true,
            'web' => true,
          ),
          'tinyphp-ui' => 
          array (
            'enabled' => true,
            'public_path' => '/static/tinyphp-ui/',
            'inject' => true,
            'dev' => 
            array (
              'enabled' => true,
              'public_path' => 'http://127.0.0.1:8080/js/tinyphp-ui.js',
              'admin_public_path' => 'http://127.0.0.1:8080/js/tinyphp-ui.admin.js',
            ),
          ),
        ),
        'path' => 
        array (
          0 => 'src.path',
          1 => 'src.public',
          2 => 'src.static',
          3 => 'src.runtime',
          4 => 'src.resources',
          5 => 'src.tmp',
          6 => 'src.vendor',
          7 => 'builder.path',
          8 => 'builder.profile_path',
          9 => 'builder.config_path',
          10 => 'config.path',
          11 => 'lang.path',
          12 => 'log.path',
          13 => 'cache.dir',
          14 => 'view.basedir',
          15 => 'view.cache.dir',
          16 => 'view.compile',
          17 => 'view.config',
          18 => 'view.path',
          19 => 'module.tinyphp-ui.template_dirname',
          20 => 'view.static.basedir',
          21 => 'src.library',
          22 => 'src.global',
          23 => 'src.controller',
          24 => 'src.console',
          25 => 'src.rpc',
          26 => 'src.model',
          27 => 'src.common',
          28 => 'src.event',
          29 => 'daemon.piddir',
          30 => 'daemon.logdir',
          31 => 'container.provider_path',
          32 => 'module.path',
        ),
      ),
    ),
    'application.cache.lang' => 
    array (
      'zh_cn' => 
      array (
        'status' => 
        array (
          0 => 'success %s',
          10001 => 'faild %s',
        ),
      ),
    ),
    'app.view.viewengine' => 
    array (
      '__tinyphp_null' => 
      array (
        'main/index.htm' => 
        array (
          'dirname' => '/data/workspace/tinyphp/application/views/default/main',
          'basename' => 'index.htm',
          'extension' => 'htm',
          'filename' => 'index',
          'size' => 167,
          'mtime' => 1656930804,
          'path' => '/data/workspace/tinyphp/application/views/default/main/index.htm',
        ),
        'debug/web.htm' => 
        array (
          'dirname' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/views/debug',
          'basename' => 'web.htm',
          'extension' => 'htm',
          'filename' => 'web',
          'size' => 11543,
          'mtime' => 1656833697,
          'path' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-ui/src/views/debug/web.htm',
        ),
      ),
      'tinyphp-demo' => 
      array (
        'test/index.htm' => 
        array (
          'dirname' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test',
          'basename' => 'index.htm',
          'extension' => 'htm',
          'filename' => 'index',
          'size' => 1929,
          'mtime' => 1657187246,
          'path' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test/index.htm',
        ),
        'test/header.htm' => 
        array (
          'dirname' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test',
          'basename' => 'header.htm',
          'extension' => 'htm',
          'filename' => 'header',
          'size' => 148,
          'mtime' => 1657187246,
          'path' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test/header.htm',
        ),
        'test/index.js' => 
        array (
          'dirname' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test',
          'basename' => 'index.js',
          'extension' => 'js',
          'filename' => 'index',
          'size' => 82,
          'mtime' => 1657187246,
          'path' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test/index.js',
        ),
        'test/index.php' => 
        array (
          'dirname' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test',
          'basename' => 'index.php',
          'extension' => 'php',
          'filename' => 'index',
          'size' => 462,
          'mtime' => 1657187246,
          'path' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test/index.php',
        ),
        'test/README.md' => 
        array (
          'dirname' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test',
          'basename' => 'README.md',
          'extension' => 'md',
          'filename' => 'README',
          'size' => 1076,
          'mtime' => 1657187246,
          'path' => '/data/workspace/tinyphp/vendor/tinyphporg/tinyphp-demo/src/views/test/README.md',
        ),
      ),
    ),
  ),
);
?>