<?php

// [ 应用入口文件 ]

//-- 增加 环境判断 需要配合nginx 配置
/*
location ~ \.php$ {
try_files $uri =404;
        fastcgi_param SERVER_ENV dev; dev== 开发环境 prod==正式环境
    }
*/

if (isset($_SERVER["SERVER_ENV"]))
{
	define('TP_ENV', $_SERVER["SERVER_ENV"]);
}
defined('TP_ENV') or define('TP_ENV', 'dev');

// 定义项目路径
define('APP_PATH', __DIR__ . '/../../application/');

//定义config目录
//模块名  等同于入口文件名 需要服务器配置
define('MODULE_NAME', basename(__FILE__, '.php'));

define('CONF_PATH',APP_PATH.MODULE_NAME.'/config/');

// 加载框架基础文件
require __DIR__ . '/../../thinkphp/base.php';

// 绑定当前入口文件到index模块
\think\Route::bind(MODULE_NAME);

// 关闭admin模块的路由
//\think\App::route(false);

// 执行应用
\think\App::run()->send();
