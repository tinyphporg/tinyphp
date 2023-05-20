<?php
/**
 *
 * @copyright (C), 2013-, King.
 * @name profile.dev.php
 * @author King
 * @version stable 1.0
 * @Date 2023年5月20日下午4:59:20
 * @Description 线上测试环境下的应用配置文件
 * @Class List 1.
 * @Function List 1.
 * @History King 2023年5月20日下午4:59:20 第一次建立该文件
 *          King 2023年5月20日下午4:59:20 修改
 *
 */
$profile = [];

// 是否开启debug模式输出
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
 * 服务端守护进程的基本设置
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
 *  session.adapters 添加自定义的SESSION适配器
 *      adapterid 适配器ID
 *      adapterClass 实现了session适配器接口的自定义session adapter class
 *
 *  session.adapter SESSION适配器
 *      redis 以datasource的redis实例作为session适配器
 *      memcache 以datasource的rmemcached实例作为session适配器
 *
 *  session.dataid
 *      根据session.adapter选择对应的data资源实例
 * */
$profile['session']['enabled'] = true;
$profile['session']['adapter'] = 'redis';
$profile['session']['dataid'] = 'redis_session';


/**
 * 模块的静态公共资源配置
 *
 * module.static.enabled 是否开启静态资源的自动复制
 *      true 开启
 *
 *  module.static.web WEB环境下是否自动开启静态资源复制
 *      true 开启  会影响web下的某些性能
 *
 *  module.static.basedir 静态公共资源复制的目录
 *
 */
$profile['module']['static']['enabled'] = true;
$profile['module']['static']['web'] = true;
$profile['module']['static']['basedir'] = '{path.static}';


/**
 * tinyphp-ui 前端库设置
 *
 * module.tinyphp-ui.enabled 开启
 *      true 开启前确认是否通过composer/框架加载，引入了tinyphporg/tinyphp-ui模块
 *
 * module.tinyphp-ui.public_path 在前端源码展示的公共路径、
 *
 *      根目录下的绝对路径 /tinyphp-ui
 *      包含域名的绝对路径 比如cdn域名， demo.xxx.com/tinyphp-ui/
 *
 *  module.tinyphp-ui.inject
 *      是否自动将ui库的公共路径，注入到html源码
 *      仅支持engine = template时
 *
 *  module.tinyphp-ui.helper
 *      ui前端库在view注册的助手类
 *      message 提示消息体
 *      pagination 分页
 *
 * module.tinyphp-ui.template_dirname
 *      UI库的视图模板路径
 *
 *  module.tinyphp-ui.dev_enabled 是否开启UI调试
 *      必须在tinyphp-ui 运行npm run dev后开启调试模式
 *
 *  module.tinyphp-ui.dev_public_path
 *      调试库在前端展现的URL  相对于view.public_path的路径
 *
 *  module.tinyphp-ui.dev_event_listener
 *      开启调试后的监听事件类
 *
 *  module.tinyphp-ui.assigns array
 *  预设的配置变量注入到视图模板内
 *  example: ui 即寻找tinyphp-ui.config内的ui节点，与application.config的ui节点合并，并以$ui注入到视图变量
 */
$profile['module']['tinyphp-ui']['enabled'] = true;
$profile['module']['tinyphp-ui']['public_path'] = '/static/tinyphp-ui/';
$profile['module']['tinyphp-ui']['inject'] = true;

// UI前端模块的开发设置 可选
$profile['module']['tinyphp-ui']['dev']['enabled'] = false;
$profile['module']['tinyphp-ui']['dev']['dev_public_path'] = "http://127.0.0.1:8080/";

// 将预设配置的变量注入到视图模板
$profile['module']['tinyphp-ui']['assigns'] = ['ui'];

return $profile;
?>