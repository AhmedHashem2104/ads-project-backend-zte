<?php

use Route\Route;


//Authentication

Route::resource('posts', 'PostController');

Route::get('/home', 'AhmedController.index');
