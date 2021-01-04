<?php

//Authentication

Route::resource('posts', 'PostController');


Route::post('/api/v1/login', 'AuthController.login');

Route::post('/api/v1/register', 'AuthController.register');

Route::get('/api/v1/logout', 'AuthController.logout');
