<?php
 return array (
  'expriation' => 1650617725,
  'value' => 
  array (
    'opensaas-pro' => 
    array (
      'name' => 'opensaas-pro',
      'namespace' => 'Opensaas',
      'desc' => '系统基本模块',
      'type' => 'module',
      'version' => '1.0.0',
      'controller' => 
      array (
        'namespace' => 'Controller',
      ),
      'model' => 
      array (
        'namespace' => 'Model',
      ),
      'action' => 
      array (
        'suffix' => 'Action',
      ),
      'route' => 
      array (
        0 => 
        array (
          'route' => 'regex',
          'rule' => 
          array (
            'regex' => '/^/opensaas/main/([a-z][a-z0-9]*)/)+([a-z][a-z0-9]*)/',
            'values' => 
            array (
              'controller' => '$1',
              'action' => '$2',
            ),
          ),
        ),
      ),
      'autoloader' => 
      array (
        'namespaces' => 
        array (
          'Opensaas' => '/data/workspace/tinyphp/application/modules/opensaas-pro/',
          'Opensaas\\Controller' => '/data/workspace/tinyphp/application/modules/opensaas-pro/controllers/',
          'Opensaas\\Controller\\Console' => '/data/workspace/tinyphp/application/modules/opensaas-pro/controllers/console/',
          'Opensaas\\Model' => '/data/workspace/tinyphp/application/modules/opensaas-pro/models/',
          'Opensaas\\Event' => '/data/workspace/tinyphp/application/modules/opensaas-pro/events/',
          'System\\Controller' => '/data/workspace/tinyphp/application/modules/opensaas-pro/controllers/',
          'System\\Controller\\Console' => '/data/workspace/tinyphp/application/modules/opensaas-pro/controllers/console/',
          'System\\Model' => '/data/workspace/tinyphp/application/modules/opensaas-pro/models/',
          'System\\Event' => '/data/workspace/tinyphp/application/modules/opensaas-pro/events/',
        ),
      ),
      'config' => true,
      'lang' => true,
      'init' => true,
      'eventlistener' => 
      array (
        0 => '\\Opensaas\\Event\\Bootstrap',
      ),
      'require' => 
      array (
      ),
      'disabled' => false,
      'errormsg' => '',
      'data' => 
      array (
        'conf_file' => '/data/workspace/tinyphp/application/modules/opensaas-pro/module.json',
        'dirname' => '/data/workspace/tinyphp/application/modules/opensaas-pro/',
        'path' => 
        array (
          'config' => '/data/workspace/tinyphp/application/modules/opensaas-pro/',
          'lang' => '/data/workspace/tinyphp/application/modules/opensaas-pro/lang/',
          'controller' => '/data/workspace/tinyphp/application/modules/opensaas-pro/controllers/',
          'controller_console' => '/data/workspace/tinyphp/application/modules/opensaas-pro/controllers/console/',
          'model' => '/data/workspace/tinyphp/application/modules/opensaas-pro/models/',
          'event' => '/data/workspace/tinyphp/application/modules/opensaas-pro/events/',
          'view' => '/data/workspace/tinyphp/application/modules/opensaas-pro/views/',
          'library' => '/data/workspace/tinyphp/application/modules/opensaas-pro/',
        ),
        'config' => 
        array (
          'config' => 
          array (
            'a' => 
            array (
              'name' => 'system',
            ),
          ),
          'containers' => NULL,
          'controllers' => NULL,
          'events' => NULL,
          'lang' => NULL,
          'models' => NULL,
          'module' => 
          array (
            'name' => 'opensaas-pro',
            'namespace' => 'Opensaas',
            'desc' => '系统基本模块',
            'type' => 'module',
            'version' => '1.0.0',
            'controller' => 
            array (
              'namespace' => 'Controller',
            ),
            'model' => 
            array (
              'namespace' => 'Model',
            ),
            'action' => 
            array (
              'suffix' => 'Action',
            ),
            'route' => 
            array (
              0 => 
              array (
                'route' => 'regex',
                'rule' => 
                array (
                  'regex' => '/^/opensaas/main/([a-z][a-z0-9]*)/)+([a-z][a-z0-9]*)/',
                  'values' => 
                  array (
                    'controller' => '$1',
                    'action' => '$2',
                  ),
                ),
              ),
            ),
            'autoloader' => 
            array (
              'namespaces' => 
              array (
                'System\\Controller' => './controllers/',
                'System\\Controller\\Console' => './controllers/console/',
                'System\\Model' => './models/',
                'System\\Event' => './events/',
              ),
            ),
            'config' => true,
            'lang' => true,
            'init' => true,
            'eventlistener' => 
            array (
              0 => '\\Opensaas\\Event\\Bootstrap',
            ),
            'require' => 
            array (
            ),
          ),
          'views' => 
          array (
            'system' => NULL,
            'user' => NULL,
          ),
        ),
        'lang' => 
        array (
        ),
        'view' => 
        array (
          'paths' => 
          array (
            0 => '/data/workspace/tinyphp/application/modules/opensaas-pro/views/index.html',
            1 => '/data/workspace/tinyphp/application/modules/opensaas-pro/views/system/index.htm',
            2 => '/data/workspace/tinyphp/application/modules/opensaas-pro/views/user/login.htm',
            3 => '/data/workspace/tinyphp/application/modules/opensaas-pro/views/user/reg.htm',
          ),
        ),
        'namespaces' => 
        array (
          'Opensaas\\Controller' => 'opensaas-pro',
          'Opensaas\\Model' => 'opensaas-pro',
          'Opensaas\\Event' => 'opensaas-pro',
          'Opensaas' => 'opensaas-pro',
        ),
        'controllerNamespace' => 'Opensaas\\Controller',
      ),
    ),
  ),
);
?>