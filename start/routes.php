<?php 
//Authentication
Route::get('/' , 'PostController.index');

Route::get('/posts' , 'PostController.posts');

Route::get('/posts_details' , 'PostController.posts_details');

Route::post('/technical_app/register' , 'AuthController.register');

Route::post('/technical_app/login' , 'AuthController.login');

Route::post('/technical_app/logout' , 'AuthController.logout');

Route::get('/technical_app/user' , 'AuthController.index');

Route::delete('/technical_app/user/:id' , 'AuthController.delete');



?>