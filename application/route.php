<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//Route::bind('admin');
Route::rule([
	//'new/:id' => 'index/News/read',
	'newss/:id' => 'admin/Index/index',

],'','GET');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
	// ������Դ·��
	'__rest__'=>[
	// ָ��indexģ���blog������  ��Ӧ���� index/create/save/read/edit/update/delete
		'blog'=>'index/blog',
	],
];
