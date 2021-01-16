<?php

//pages
Route::get('/:lang/home', 'pages/HomePageController.index');

Route::get('/:lang/service/:page', 'pages/ServicePageController.index');

Route::get('/:lang/blogs', 'pages/BlogPageController.index');

Route::get('/:lang/blog/:slug', 'pages/BlogPageController.blogOne');

Route::get('/:lang/contact-us', 'pages/ContactPageController.index');

Route::post('/sendMail', 'pages/ContactPageController.sendMail');
