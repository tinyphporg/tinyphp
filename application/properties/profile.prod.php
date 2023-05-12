<?php 
$profile = [];
$profile['debug']['enabled'] = false;
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

$profile['data']['sources'] = [
    ['id' => 'default', 'driver' => 'db.mysqli', 'host' => '127.0.0.1', 'port' => '3306', 'user' => 'root', 'password' => '123456', 'dbname' => 'mysql'],
    ['id' => 'redis', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379', 'db' => 0],
    ['id' => 'redis_cache', 'driver' => 'redis', 'db' => 1, 'servers' => [['host' => '127.0.0.1', 'port' => '6379']]],
    ['id' => 'redis_session', 'driver' => 'redis', 'db' => 2, 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'redis_queue', 'driver' => 'redis', 'db' => 3, 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'memcached', 'driver' => 'memcached', 'servers' => [['host' => '127.0.0.1', 'port' => '11211']], 'persistent_id' => null, 'options' => []]
];


$profile['daemon']['daemons'] = [
    'tinyphp-daemon' => [
        'workers' => [
            ['id' => 'index', 'type' => 'worker' , 'dispatcher' => ['controller' => 'main', 'action' => 'index', "module" => ''], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '10']],
            ['id' => 'test', 'worker' => 'worker' , 'dispatcher' => ['controller' => 'main', 'action' => 'test', 'module' => ''], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '1']]
        ],
        'options' => [],
    ]
];

$profile['cache']['sources'] = [
    ['id' => 'redis', 'storager' => 'redis', 'options' => ['ttl' => 3600, 'dataid' => 'redis_cache']],
    ['id' => 'memcached', 'storager' => 'memcached', 'options' => ['ttl' => 3600, 'dataid' => 'memcached']],
    ['id' => 'file', 'storager' => 'file', 'options' => ['ttl' => 3600, 'path' => '']],
    ['id' => 'php', 'storager' => 'php', 'options' => ['ttl' => 3600, 'path' => '']],
    ['id' => 'default', 'storager' => 'single', 'options' => ['ttl' => 3600, 'path' => '']]
];

$profile['session']['adapter'] = 'redis';
$profile['session']['dataid'] = 'redis_session';
return $profile;
?>