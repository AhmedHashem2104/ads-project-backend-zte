<?php

//pages
Route::get('/:lang/home', 'pages/HomePageController.index');

Route::get('/:lang/service/:id', 'pages/ServicePageController.index');

Route::get('/:lang/our/:id', 'pages/OurPageController.index');


Route::get('/:lang/blogs', 'pages/BlogPageController.index');

Route::get('/:lang/blog/:slug', 'pages/BlogPageController.blogOne');

Route::get('/:lang/contact-us', 'pages/ContactPageController.index');

Route::post('/sendMail', 'pages/ContactPageController.sendMail');
