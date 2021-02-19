<?php

//Authentication

Route::post('/api/login' , 'AuthController.login');

Route::post('/api/register' , 'AuthController.register');

Route::get('/api/logout' , 'AuthController.logout');

//Countries

Route::get('/api/countries/all/:page' , 'CountriesController.paginate');

Route::get('/api/country/:id' , 'CountriesController.show');

Route::post('/api/country' , 'CountriesController.store');

Route::put('/api/country/:id' , 'CountriesController.update');

Route::delete('/api/country/:id' , 'CountriesController.destroy');

//Languages

Route::get('/api/languages/all/:page' , 'LanguagesController.paginate');

Route::get('/api/language/:id' , 'LanguagesController.show');

Route::post('/api/language' , 'LanguagesController.store');

Route::put('/api/language/:id' , 'LanguagesController.update');

Route::delete('/api/language/:id' , 'LanguagesController.destroy');

//Categories

Route::get('/api/categories/all/:page' , 'CategoriesController.paginate');

Route::get('/api/category/:id' , 'CategoriesController.show');

Route::post('/api/category' , 'CategoriesController.store');

Route::put('/api/category/:id' , 'CategoriesController.update');

Route::delete('/api/category/:id' , 'CategoriesController.destroy');
