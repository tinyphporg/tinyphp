<?php
return
    [
    'name' => 'tinyphp-demo1',
    'header_php_env' => TRUE,  //是否在打包文件首行添加php运行环境标识 #!/usr/bin/php
    'imports' => [], //引用其他路径的库 KEY/命名空间 => VALIE/加载路径
        'controller' => 'main', /*默认控制器*/
        'action' => 'index1',  /*默认动作*/
    'attachments' => [
 //       ['config/app', APPLICATION_PATH . 'config/'],
    ], //解压到工作目录的附件
        'home_attachments' => [
 //           ['config/app', APPLICATION_PATH . 'config/'],
        ], //解压到用户目录的附件
];
?>