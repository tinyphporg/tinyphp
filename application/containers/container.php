<?php


return [
    // config::$container->create('tinyphp'),
    Tiny\Cache\Cache::class => function($a, $a)
    {
        return new Cache($a, $a);
    }
]
?>