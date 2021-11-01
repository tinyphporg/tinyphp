  TinyPHP For Framework
====

* [简介](#简介)
    
* [运行环境](#运行环境)
    * [开发环境部署，docker](#docker)
    * [生产环境部署，CentOS7X.X86_64](#centos)
            
* [框架安装](#框架安装)
    * [git安装](#git)
    * [composer安装](#composer)
* [Demo](#DEMO)    
    * [simple](#simple)
    * [tinyphp-bootstrap（推荐）](#tinyphp-bootstrap) 

* [编码规范](#编码规范)
    * [团队协作规范](#团队协作规范) 
    * [PHP编码规范](#PHP编码规范)
    * [SQL编码规范](#SQL编码规范)

* [框架使用手册](#框架使用手册) 
    * [Index/入口文件:    demo/public/index.php](https://github.com/saasjit/tinyphp/blob/master/docs/manual/index-001.md)
    * [Application/应用: demo/application/](https://github.com/saasjit/tinyphp/blob/master/docs/manual/application-002.md)    
    * [Proptrites/应用配置:  demo/application/config/profile.php](https://github.com/saasjit/tinyphp/blob/master/docs/manual/profile-003.md)
        * [Debug/调试模式](https://github.com/saasjit/tinyphp/blob/master/docs/manual/debug-004.md)
        * [Bootstrap/引导程序:demo/application/libs/common/Bootstrap.php](https://github.com/saasjit/tinyphp/blob/master/docs/manual/bootstrap-005.md)
        * [Lang/语言包:demo/application/lang](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lang-006.md)
        * [Data/数据源](https://github.com/saasjit/tinyphp/blob/master/docs/manual/data-007.md)
        * [Cache/缓存:demo/](https://github.com/saasjit/tinyphp/blob/master/docs/manual/cache-008.md)
        * [Router/路由器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/router-009.md)
        * [Logger/日志收集:demo/application/runtime/log](https://github.com/saasjit/tinyphp/blob/master/docs/manual/logger-010.md)
        * [Dispatcher/派发器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/dispatcher-011.md)
        * [Configuration/配置类](https://github.com/saasjit/tinyphp/blob/master/docs/manual/configuration-012.md)
        * [Builder/打包单一可执行文件](https://github.com/saasjit/tinyphp/blob/master/docs/manual/builder-013.md)
        * [Daemon/守护进程](https://github.com/saasjit/tinyphp/blob/master/docs/manual/daemon-014.md)
        * [Filter/过滤器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/filter-015.md)
        * [Plugin/插件](https://github.com/saasjit/tinyphp/blob/master/docs/manual/plugin-016.md)
    * [Controller/控制器:demo/application/controllers/](https://github.com/saasjit/tinyphp/blob/master/docs/manual/controller-017.md)
    * [Model/模型:demo/application/models](https://github.com/saasjit/tinyphp/blob/master/docs/manual/model-018.md)
    * [Viewer/视图:demo/application/views](https://github.com/saasjit/tinyphp/blob/master/docs/manual/viewer-019.md)
    
* [框架标准库参考](#框架标准库参考)
    * [Tiny：工具包](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/tiny.md)
    * [Tiny\Runtime：运行时](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/runtime.md)
    * [Tiny\Build：打包](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/build.md)
    * [Tiny\Cache：缓存](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/cache.md)
    * [Tiny\Config：配置](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/config.md)
    * [Tiny\Console：命令行](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/console.md)
    * [Tiny\Data：数据层](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/data.md)
    * [Tiny\Filter：过滤器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/filter.md)   
    * [Tiny\Image：图片处理](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/image.md)
    * [Tiny\Lang：语言包](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/lang.md)
    * [Tiny\Log：日志处理](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/log.md)
    * [Tiny\MVC：MVC](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/mvc.md)
    * [Tiny\Net：网络](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/net.md)
    * [Tiny\String：字符处理](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/string.md) 
   
                     
简介
====

> 一款简单的，轻量级的，经过生产环境检验，(日PV10亿级)的PHP MVC框架。    
> 主要应用于分布式的高并发环境，和多人团队协作;    
> 支持多环境和分布式处理；    
> 适用于 Web/微服务，RPC，命令行，单一命令行文件执行，服务端多任务守护进程的编码。   

> demo地址：[https://github.com/saasjit/tinyphp-bootstrap](https://github.com/saasjit/tinyphp-bootstrap)。   
> 提供前端框架(webpack5+bootstrap+jquery+adminlte)支持。   
> 可快速开发面向客户端应用后端api，和标准易用的管理后台。   


运行环境
====

### centos
> 本方式适应于高度定制的生产环境，依赖于lnmp-utils。   
> lnmp-utils: Linux(CentOS7X_64) +openresty(nginx)+Mysql+PHP+Redis一键安装包。    
> 项目地址: https://github.com/saasjit/lnmp-utils    

```shell
git clone https://github.com/saasjit/lnmp-utils.git
cd ./lnmp-utils
./install.sh -m tinyphp-bootstrap
cd /data/www/tinyphp-boostrap
php public/index.php
```

### docker
>  适应于开发环境
```shell

#可更改/data/workspace/tinyphp-bootstrap为自定义IDE工作目录
workspace=/data/workspace/tinyphp-bootstrap

docker pull centos:7

docker run -d -p 80:80 -p 10022:22 -v $workspace:/data/web/tinyphp-bootstrap --name="tinyphp-bootstrap" --hostname="tinyphp-bootstrap" --restart=always centos:7 /sbin/init

docker exec -it tinyphp-bootstrap /bin/bash

#login docker tinyphp-bootstrap

git clone https://github.com/saasjit/lnmp-utils.git
cd ./lnmp-utils
./install.sh -m tinyphp-bootstrap
curl http://127.0.0.1

```

框架安装
====

### git
```shell
git clone https://github.com/saasjit/tinyphp.git
cd tinyphp
```

### composer
```shell
composer create-project saasjit/tinyphp 
```

DEMO
====

### simple
```shell
#运行
php demo/public/index.php

#编译
php demo/public/index.php --build

#开启守护进程
php demo/public/index.php -d

#编辑具体配置文件
vi application/config/profile.php
```

### tinyphp-bootstrap
> 推荐于面向无前端工程师情况下的后台项目开发。
> 
> 依赖于 https://github.com/saasjit/tinyphp-bootstrap.git

> tinyphp-bootstrap: 轻量级的tinyphp demo脚手架

> 前端:webpack5+bootstrap5+adminlte
> 
> 后端:tinyphp 
> 


```shell
composer create-project saasjit/tinyphp-bootstrap

cd tinyphp-bootstrap

#运行
php public/index.php

#编译
php public/index.php --build

#开启守护进程
php public/index.php -d

#编辑具体配置文件
vi application/config/profile.php
```

编码规范
====

团队协作规范
----

#### 语言基础能力   
* 强调语言的基础能力；
* 熟练掌握PHP常用函数库；
* 深度理解Unix/Linux操作系统，IO/进程，Socket/TCP/UDP等基础知识。



#### MVC规范   
* 需要遵守严格的面向对象编码规范，禁止全局变量穿透对象/高耦合/低内聚等不健康编码方式的滥用。
* 模型层（Model）
    * 专注于各种业务数据源的处理
    * 模型层次划分清晰；
    * 高度内聚；
    * 面向外部调用的公共接口调用严格遵守确定性的输入输出，以兼容各种运行环境下的数据处理；
* 视图层(View)：
    * 保持轻量级
    * 不加载复杂的模板工具去极大的损耗性能；
    * 在面向客户端应用/API接口编码的情况下，完全省去视图层处理；
    * 推荐JSON数据交互进行接口输出
* 控制层(Controller)：
    * 专注于业务流程和逻辑控制。
    * 保持各种运行环境下的分布式处理和与模型层的低度耦合。

#### 在遵守规范的前提下，达到实用性与高性能的均衡   
* 少即是多，不做过多封装，以免造成团队协作中的代码阅读，对框架的完整性和运行性能的损害。
* 不依赖框架，框架仅为辅助编码和团队协作的规范约束工具，更多时候需要在一个基础的约束下，依赖自身的专业能力解决复杂环境下的复杂问题。
* 不强调框架的全天候作业能力，什么都会意味着什么都做不好；
* 通常情况下，如果花更多力气和编码技巧能达到更好性能，相对于简便省时但影响性能的情况下，倾向于前者，即不做对性能损伤明显的处理；
* 需要保持性能和稳定的鲁棒性，在某些领域过分高级的处理会更多的损害编码的灵活性。

PHP编码规范
----

> [第一章 文件结构](https://github.com/saasjit/tinyphp/blob/master/docs/coding/fileStructure-001.md)   

> [第二章 程序的排版](https://github.com/saasjit/tinyphp/blob/master/docs/coding/programTypesetting-002.md)    

> [第三章 命名规则](https://github.com/saasjit/tinyphp/blob/master/docs/coding/rules-003.md)  

> [第四章 表达式和基本语句](https://github.com/saasjit/tinyphp/blob/master/docs/coding/expression-004.md)  

> [第五章 常量](https://github.com/tinycn/saasjit/blob/master/docs/coding/constant-005.md)  

> [第六章 函数设计](https://github.com/saasjit/tinyphp/blob/master/docs/coding/function-006.md)  

> [第七章 IDE的选择](https://github.com/saasjit/tinyphp/blob/master/docs/coding/ide-007.md)  

> [第八章 编码规范的一些示例](https://github.com/saasjit/tinyphp/blob/master/docs/coding/example-008.md)

<br>
<br>

SQL使用规范
----

>[第一章 查询规范](https://github.com/saasjit/tinyphp/blob/master/docs/sql/select-001.md)

>[第二章 库和表的规范](https://github.com/saasjit/tinyphp/blob/master/docs/sql/dbtable-002.md)

>[第三章 数据库设计原则](https://github.com/saasjit/tinyphp/blob/master/docs/sql/design-003.md)

>[第四章 数据库优化原则](https://github.com/saasjit/tinyphp/blob/master/docs/sql/optimization-004.md)

<br>
<br>


框架使用手册
====

* [Index/入口文件:    demo/public/index.php](https://github.com/saasjit/tinyphp/blob/master/docs/manual/index-001.md)
* [Application/应用: demo/application/](https://github.com/saasjit/tinyphp/blob/master/docs/manual/application-002.md)    
* [Proptrites/应用配置:  demo/application/config/profile.php](https://github.com/saasjit/tinyphp/blob/master/docs/manual/profile-003.md)
    * [Debug/调试模式](https://github.com/saasjit/tinyphp/blob/master/docs/manual/debug-004.md)
    * [Bootstrap/引导程序:demo/application/libs/common/Bootstrap.php](https://github.com/saasjit/tinyphp/blob/master/docs/manual/bootstrap-005.md)
    * [Lang/语言包:demo/application/lang](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lang-006.md)
    * [Data/数据源](https://github.com/saasjit/tinyphp/blob/master/docs/manual/data-007.md)
    * [Cache/缓存:demo/](https://github.com/saasjit/tinyphp/blob/master/docs/manual/cache-008.md)
    * [Router/路由器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/router-009.md)
    * [Logger/日志收集:demo/application/runtime/log](https://github.com/saasjit/tinyphp/blob/master/docs/manual/logger-010.md)
    * [Dispatcher/派发器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/dispatcher-011.md)
    * [Configuration/配置类](https://github.com/saasjit/tinyphp/blob/master/docs/manual/configuration-012.md)
    * [Builder/打包单一可执行文件](https://github.com/saasjit/tinyphp/blob/master/docs/manual/builder-013.md)
    * [Daemon/守护进程](https://github.com/saasjit/tinyphp/blob/master/docs/manual/daemon-014.md)
    * [Filter/过滤器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/filter-015.md)
    * [Plugin/插件](https://github.com/saasjit/tinyphp/blob/master/docs/manual/plugin-016.md)
 * [Controller/控制器:demo/application/controllers/](https://github.com/saasjit/tinyphp/blob/master/docs/manual/controller-017.md)
 * [Model/模型:demo/application/models](https://github.com/saasjit/tinyphp/blob/master/docs/manual/model-018.md)
 * [Viewer/视图:demo/application/views](https://github.com/saasjit/tinyphp/blob/master/docs/manual/viewer-019.md)

框架标准库参考
====

* [Tiny：工具包](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/tiny.md)
* [Tiny\Runtime：运行时](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/runtime.md)
* [Tiny\Build：打包](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/build.md) 
* [Tiny\Cache：缓存](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/cache.md)
* [Tiny\Config：配置](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/config.md)
* [Tiny\Console：命令行](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/console.md)
* [Tiny\Data：数据层](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/data.md)
* [Tiny\Filter：过滤器](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/filter.md)   
* [Tiny\Image：图片处理](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/image.md)
* [Tiny\Lang：语言包](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/lang.md)
* [Tiny\Log：日志处理](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/log.md)
* [Tiny\MVC：MVC](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/mvc.md)
* [Tiny\Net：网络](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/net.md)
* [Tiny\String：字符处理](https://github.com/saasjit/tinyphp/blob/master/docs/manual/lib/string.md) 