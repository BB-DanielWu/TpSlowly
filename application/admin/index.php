<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义项目路径
define('APP_PATH', __DIR__ . '/../../application/');

//-- 增加 环境判断 需要配合nginx 配置
/*
location ~ \.php$ {
try_files $uri =404;
        fastcgi_param SERVER_ENV dev; dev== 开发环境 prod==正式环境
    }
*/

if (isset($_SERVER["SERVER_ENV"])) {
	define('TP_ENV', $_SERVER["SERVER_ENV"]);
}
defined('TP_ENV') or define('TP_ENV', 'dev');

// 加载框架基础文件
require __DIR__ . '/../../thinkphp/base.php';
// 绑定当前入口文件到admin模块
\think\Route::bind('admin');
// 关闭admin模块的路由
\think\App::route(false);
// 执行应用
\think\App::run()->send();