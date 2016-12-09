<?php
use think\Config;

//判断环境
if (TP_ENV == 'prod')
{
	//正式环境
	//加载模块配置
	Config::load(APP_PATH . 'admin/config/config.php');
	//database配置
	Config::load(APP_PATH . 'admin/config/database.php');
} else {
	//测试环境
	//加载模块配置
	Config::load(APP_PATH . 'admin/config/config.php');
	//database配置
	Config::load(APP_PATH . 'admin/config/database.php');
}

//Config::parse(APP_PATH.'index/config/database.ini','ini'); //ini xml

?>