<?php
use think\Config;
//判断环境
if (TP_ENV == 'prod')
{
	//正式环境
	//加载模块配置
	Config::load(APP_PATH . 'index/config/config.php');
	//database配置
	Config::load(APP_PATH . 'index/config/database.php');
} else {
	//测试环境
	//加载模块配置
	Config::load(APP_PATH . 'index/config/testconfig.php');
	//database配置
	Config::load(APP_PATH . 'index/config/testdatabase.php');
}
?>