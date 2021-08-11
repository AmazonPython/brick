<?php

use NoahBuscher\Macaw\Macaw;

// 闭包路由示例
Macaw::get('/', function() {
    echo 'Hello Brick!';
});
// 控制器路由
Macaw::get('/index', 'App\Controllers\DemoController@index');

// 带参数的控制器路由
Macaw::get('/show/(:num)', 'App\Controllers\DemoController@show');

// 查询路由示例
Macaw::get('/example', 'App\Controllers\DemoController@example');

Macaw::dispatch();
