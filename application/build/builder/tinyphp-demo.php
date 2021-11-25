<?php
return
    [
    'name' => 'tinyphp-demo',
    'header_php_env' => TRUE,  //是否在打包文件首行添加php运行环境标识 #!/usr/bin/php
    'imports' => [], //引用其他路径的库 KEY/命名空间 => VALIE/加载路径
    'controller' => 'main', /*默认控制器*/
    'action' => 'index',  /*默认动作*/
    'framework_path' => TINY_FRAMEWORK_PATH,                  //tinyphp-framework 路径
    'vendor_path' => dirname(APPLICATION_PATH) . '/vendor/',  // composer目录路径
    'exclude' => ["/^\.(git|buildpath|project)/", "/tinyphp-ui\/(node_modules|src\/js|conf|dist)/"], // 排除的文件路径
        'attachments' => [  //解压到工作目录的附件
 //       ['config/app', APPLICATION_PATH . 'config/'],
    ], 
        'home_attachments' => [  //解压到用户目录的附件
 //           ['config/app', APPLICATION_PATH . 'config/'],
        ], 
];
?>