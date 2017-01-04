<?php

use think\Route;

Route::rule([
	'new/:id' => 'News/read',
	'hellow' => 'Index/hellow',
],'','GET');

Route::resource('blog','Blog');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['admin/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['admin/hello', ['method' => 'post']],
    ],

];
