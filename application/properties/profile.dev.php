<?php
$profile = [];
$profile['debug']['enabled'] = true;

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
 * 数据资源池配置
 *
 *  data.enabled 开启数据资源池
 *      true 开启|false 关闭
 *
 *   data.default_id 默认ID
 *      默认调用datasource的ID
 *
 *  data.drivers 驱动数组
 *
 *  data.sources 数据资源池配置
 *       mysql驱动
 *      driver = db.mysqli|db.pdo| [
 *          id => 调用时使用的ID字段
 *          host 通用的远程资源
 *          prot 通用的远程端口
 *          charset utf8mb4 兼容表情包
 *          password 通用密码
 *          dbname 数据库名称
 *      ]
 *
 *      redis驱动
 *      driver = redis [
 *          id => 调用时使用的ID字段
 *          host => 远程host 单独设置的host & prot 会合并到servers内
 *          port => 远程端口
 *          db => 选择的DB Index
 *          servers => [[host => 服务, port => 端口]]
 *      ]
 *
 *      memcache驱动
 *      driver = memcached [
 *          servers => [[host=> 服务地址, port=> 端口]]
 *          persistent_id => 共享实例的ID
 *          options => [选项]
 *      ]
 */
$profile['data']['sources'] = [
    ['id' => 'default', 'driver' => 'db.mysqli', 'host' => '127.0.0.1', 'port' => '3306', 'user' => 'root', 'password' => '123456', 'dbname' => 'mysql'],
    ['id' => 'redis', 'driver' => 'redis', 'host' => '127.0.0.1', 'port' => '6379', 'db' => 0],
    ['id' => 'redis_cache', 'driver' => 'redis', 'db' => 1, 'servers' => [['host' => '127.0.0.1', 'port' => '6379']]],
    ['id' => 'redis_session', 'driver' => 'redis', 'db' => 2, 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'redis_queue', 'driver' => 'redis', 'db' => 3, 'host' => '127.0.0.1', 'port' => '6379'],
    ['id' => 'memcached', 'driver' => 'memcached', 'servers' => [['host' => '127.0.0.1', 'port' => '11211']], 'persistent_id' => null, 'options' => []]
];

/**
 * 守护进程的基本设置
 *
 * 仅在命令行环境的ConsoleApplication实例生效
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
 *          dispatcher => [controller,action,module]代理执行worker进程的控制器,动作参数, 模块
 *          num => 子进程的数量
 *          options => [] 附加给worker实例的参数
 *              type = worker:
 *                  options => [
 *                  runmax => 最大运行次数，避免内存占用过多系统阻塞
 *                  tick  => 重建子进程的间隔
 *              ]
 *      】
 */
$profile['daemon']['daemons'] = [
    'tinyphp-daemon' => [
        'workers' => [
            ['id' => 'index', 'type' => 'worker' , 'dispatcher' => ['controller' => 'main', 'action' => 'index', "module" => ''], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '10']],
            ['id' => 'test', 'worker' => 'worker' , 'dispatcher' => ['controller' => 'main', 'action' => 'test', 'module' => ''], 'num' => 1, 'options' => ['runmax' => 1024, 'tick' => '1']]
        ],
        'options' => [],
    ]
];


/**
 * Application的缓存设置
 *
 * 支持的存储器类型
 *      file => Tiny\Cache\Storager\File 文件存储
 *      memcached => Tiny\Cache\Storager\Memcached memcache存储
 *      php      => Tiny\Cache\Storager\PHP PHP文件序列化存储
 *      redis => Tiny\Cache\Storager\Redis  Redis存储
 *      SingleCache => Tiny\Cache\Storager\SingleCache 单文件存储 适合小数据快速缓存
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
 * cache.application_storager
 *      string 当前应用实例的缓存存储器
 *
 * cache.default_id 默认的缓存资源ID
 *      $cache 将缓存实例当缓存调用时所调用的cacheID
 *
 * cache.application
 *      是否对application的lang container config等数据进行缓存
 *
 * cache.storagers 缓存存储器的注册列表
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
$profile['cache']['sources'] = [
    ['id' => 'default', 'storager' => 'redis', 'options' => ['ttl' => 3600, 'dataid' => 'redis_cache']],
    ['id' => 'memcached', 'storager' => 'memcached', 'options' => ['ttl' => 3600, 'dataid' => 'memcached']],
];


// session
$profile['session']['enabled'] = true;
$profile['session']['adapter'] = 'redis';
$profile['session']['dataid'] = 'redis_session';
return $profile;
?>