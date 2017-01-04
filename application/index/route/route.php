<?php

use think\Route;

Route::rule([
	'new/:id' => 'News/read',
],'','GET');

Route::resource('blog','Blog');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
