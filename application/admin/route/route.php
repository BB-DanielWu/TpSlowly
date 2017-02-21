<?php

use think\Route;

Route::rule([
	'new/:id' => 'News/read',
	'hellow' => 'Index/hellow',
],'','GET');

Route::resource('user_admin','AdminuserController');
Route::rule('user_admin/disable/:operation/:id','AdminuserController/disable');
Route::rule('user_admin/resetpassword/:id','AdminuserController/resetpassword');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['admin/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['admin/hello', ['method' => 'post']],
    ],

];
