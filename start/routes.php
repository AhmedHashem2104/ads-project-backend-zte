<?php
//Authentication
Route::get('/', 'PostController.index');

Route::post('/posts', 'PostController.posts');


Route::delete('/posts', 'PostController.posts');
