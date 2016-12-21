<?php

use think\Route;
#Route::bind('index');
Route::rule([
	'new/:id' => 'index/News/read',
],'','GET');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
