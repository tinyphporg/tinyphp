<?php
$profile = [];
$profile['debug']['enabled'] = true;

echo "dev";

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

return $profile;
?>