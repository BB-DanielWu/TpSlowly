<?php

use think\Route;
#Route::bind('admin');

Route::rule([
	'new/:id' => 'admin/News/read',
],'','GET');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['admin/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['admin/hello', ['method' => 'post']],
    ],

];
