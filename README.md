TinyPHP Framework for PHP
====

tinyphp v2.0.0
----

+ 基于tinyphp framework v2.0.0 [https://github.com/tinyphporg/tinyphp-framework](https://github.com/tinyphporg/tinyphp-framework)
  
> 经过日PV十亿级别生产环境检验；  
> 应用于高并发高性能的生产环境；
> 支持分布式的RPC微服务处理；    
> 适用于 Web/Console/RPC等运行环境，包括单一命令行文件打包，多任务的服务端守护进等。   

tinyphp的适用场景与理念
---- 
* 客户端应用(IOS/Android/H5/小程序)的API接口开发：
    * 高性能，大并发。
    * 快速开发
    
*  Web管理后台：
    * 适用于全栈或不具备设计工程师和前端工程师的研发团队。
    * 集成了tinyphp-ui前端框架，只需少量的JS前端代码。 
    
* 大规模团队协作：
    * 10-100+人以上的研发团队。
    * 创业团队，产品快速成型，可在较少的研发人力成本下进行高效的敏捷开发。
    * 适用于具备在大规模的高性能应用场景下，通过PHP解决大多数复杂业务的架构。
    * 可将大规模复杂应用的后端语言有效控制为PHP一种后端开发语言，有效降低项目维护成本和团队管理难度。
快速开始
----
```shell
composer create-project tinyphporg/tinyphp

#console 运行
php public/index.php

#编译单文件
php public/index.php --build

#服务端守护进程
php public/index.php -d  //开启
php public/index.php --daemon=stop  //关闭

#配置文件 
application/config/profile.php
``` 
核心组件
====

### tinyphp-framwork v2.0 
+ 框架地址：   [https://github.com/tinyphporg/tinyphp-framework](https://github.com/tinyphporg/tinyphp-framework)    

### tinyphp-docs
+ 中文文档: 使用手册、标准库。  
+ 项目地址: [https://github.com//tinyphp-docs](https://github.com/tinyphporg/tinyphp-docs)   

### tinyphp-ui  
+ 前端UI组件库: webpack5+bootstrap5+jquery...     
+ 项目地址： : [https://github.com/tinyphporg/tinyphp-ui](https://github.com/tinyphporg/tinyphp-ui)  

### lnmp-utils   
+ Linux(CentOS7X_64) +openresty(nginx)+Mysql+PHP+Redis一键安装包。    
+ 项目地址: https://github.com/tinyphporg/lnmp-utils

快速构建运行环境
----

### CentOS X64 7.4+
> 适应于生产环境，依赖于lnmp-utils。   
> lnmp-utils: Linux(CentOS7X_64) +openresty(nginx)+Mysql+PHP+Redis一键安装包。    
> 项目地址: https://github.com/tinyphporg/lnmp-utils    

```shell
git clone https://github.com/tinyphporg/lnmp-utils.git
cd ./lnmp-utils
./install.sh -m tinyphp
```

### docker
>  适应于开发环境

```shell
#可更改/data/workspace/tinyphp为自定义IDE工作目录
workspace=/data/workspace/

docker pull centos:7
docker run -d -p 80:80 -p 3306:3306 -p 8080:8080 -p 8989:8989 -p 10022:22 -v $workspace:/data/web  --name="tinyphp" --hostname="tinyphp" --restart=always -w /data/worksapce/ centos:7 /sbin/init

#port 8080 
#   用于tinyphporg/tinyphp-ui调试
# npm run dev

#port 8989 
#    用于tinyphporg/tinyphp-ui打包详情查看
# npm run build

docker exec -it tinyphp /bin/bash

git clone https://github.com/tinyphporg/lnmp-utils.git
cd ./lnmp-utils
./install.sh 

cd /data/web/tinyphporg/tinyphp
php public/index.php

```

中文手册
---- 
> 本框架的编码规范基本遵守PSR规范标准，仅少数细节做灵活调整。
* [入门](#入门)
   * 环境搭建 [lnmp-utils: http://github.com/tinyphporg/lnmp-utils.git](http://github.com/tinyphporg/lnmp-utils.git)
   * Demo [tinyphp: http://github.com/tinyphporg/tinyphp.git](http://github.com/tinyphporg/tinyphp.git)
    
* [语言基础规范](https://github.com/tinyphporg/tinyphp-docs/tree/master/docs/coding)
    + [文件结构](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/file_001.md)   
    + [程序的排版](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/program_typesetting_002.md)    
    + [命名规则](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/rules_003.md)  
    + [表达式和基本语句](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/expression_004.md)  
    + [常量](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/constant_005.md)  
    + [函数设计](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/function_006.md)  
    + [IDE的选择](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/ide_007.md)  
    + [编码规范的一些示例](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/coding/example_008.md)  

* [数据库设计和操作查询规范](https://github.com/tinyphporg/tinyphp-docs/tree/master/docs/sql)
    + [查询规范](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/sql/select_001.md)
    + [库和表的规范](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/sql/dbtable_002.md)
    + [数据库设计原则](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/sql/design_003.md)
    + [数据库的配置优化](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/sql/optimization_004.md)
* [团队编码规范](https://github.com/tinyphporg/tinyphp-docs/tree/master/docs/team)
    + [核心点](https://github.com/tinyphporg/tinyphp-docs/edit/master/docs/team/README.md#%E6%A0%B8%E5%BF%83%E7%82%B9)
    + [对于tinyphp的几个清醒认识](https://github.com/tinyphporg/tinyphp-docs/edit/master/docs/team/README.md#%E5%AF%B9%E4%BA%8E%E6%A1%86%E6%9E%B6%E7%9A%84%E5%87%A0%E4%B8%AA%E6%B8%85%E9%86%92%E8%AE%A4%E8%AF%86)
    + [tinyphp的适用场景与理念](https://github.com/tinyphporg/tinyphp-docs/edit/master/docs/team/README.md#tinyphp%E7%9A%84%E9%80%82%E7%94%A8%E5%9C%BA%E6%99%AF%E4%B8%8E%E7%90%86%E5%BF%B5)
    + [MVC的协作规范](https://github.com/tinyphporg/tinyphp-docs/edit/master/docs/team/README.md#mvc%E7%9A%84%E5%8D%8F%E4%BD%9C%E8%A7%84%E8%8C%83)
    + [tinyphp的系统设计原则](https://github.com/tinyphporg/tinyphp-docs/edit/master/docs/team/README.md#tinyphp%E7%9A%84%E7%B3%BB%E7%BB%9F%E8%AE%BE%E8%AE%A1%E5%8E%9F%E5%88%99)
* [框架使用参考手册](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/) 
    * [Index/入口文件:    demo/public/index.php](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/index-001.md)
    * [Application/应用: demo/application/](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/application-002.md)    
    * [Proptrites/应用配置:  demo/application/config/profile.php](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/profile-003.md)
        * [Debug/调试模式](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/debug-004.md)
        * [Bootstrap/引导程序:demo/application/libs/common/Bootstrap.php](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/bootstrap-005.md)
        * [Lang/语言包:demo/application/lang](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lang-006.md)
        * [Data/数据源](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/data-007.md)
        * [Cache/缓存:demo/](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/cache-008.md)
        * [Router/路由器](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/router-009.md)
        * [Logger/日志收集:demo/application/runtime/log](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/logger-010.md)
        * [Dispatcher/派发器](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/dispatcher-011.md)
        * [Configuration/配置类](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/configuration-012.md)
        * [Builder/打包单一可执行文件](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/builder-013.md)
        * [Daemon/守护进程](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/daemon-014.md)
        * [Filter/过滤器](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/filter-015.md)
        * [Plugin/插件](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/plugin-016.md)
    * [Controller/控制器:demo/application/controllers/](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/controller-017.md)
    * [Model/模型:demo/application/models](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/model-018.md)
    * [Viewer/视图:demo/application/views](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/viewer-019.md)
    
* [框架标准库参考](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/)
    * [Tiny：工具包](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/tiny.md)
    * [Tiny\Runtime：运行时](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/runtime.md)
    * [Tiny\Build：打包](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/build.md)
    * [Tiny\Cache：缓存](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/cache.md)
    * [Tiny\Config：配置](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/config.md)
    * [Tiny\Console：命令行](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/console.md)
    * [Tiny\Data：数据层](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/data.md)
    * [Tiny\Filter：过滤器](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/filter.md)   
    * [Tiny\Image：图片处理](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/image.md)
    * [Tiny\Lang：语言包](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/lang.md)
    * [Tiny\Log：日志处理](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/log.md)
    * [Tiny\MVC：MVC](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/mvc.md)
    * [Tiny\Net：网络](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/net.md)
    * [Tiny\String：字符处理](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/manual/lib/string.md) 
   
* [UI库参考](https://github.com/tinyphporg/tinyphp-docs/blob/master/docs/ui/)  

