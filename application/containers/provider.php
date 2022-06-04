<?php
/**
 * 容器定义设置
 * 
 * @copyright (C), 2013-, King.
 * @name container.php
 * @author King
 * @version stable 2.0
 * @Date 2022年3月13日上午12:05:56
 * @Class List class
 * @Function List function_container
 * @History King 2022年3月13日上午12:05:56 2017年3月8日下午4:20:28 0 第一次建立该文件
 */
use App\Common\Bootstrap;

/**
 * alias => [别名 => class name],
 * 
 * 可在class文件的注释里@autowired自动注解，可自动加载，无需在容器配置文件内配置
 * 
 * 通过类名自动加载
 *      class name => class name 
 * 
 * 通过匿名函数加载实例
 *      class => function(){
 *      return new ClassName();
 * }
 * 
 */
return [
    'alias' => [
        'bootstrap' => Bootstrap::class,
    ],
   // Bootstrap::class,
];
?>