<?php

//Authentication

Route::post('/api/v1/login', 'AuthController.login');

Route::post('/api/v1/register', 'AuthController.register');

Route::get('/api/v1/logout', 'AuthController.logout');


// Administration

Route::post('/api/v1/admin/createAccount', 'Admin/AuthController.createAccount');

Route::delete('/api/v1/admin/deleteAccount/:id', 'Admin/AuthController.deleteAccount');

Route::put('/api/v1/admin/updateAccount/:id', 'Admin/AuthController.updateAccount');

Route::get('/api/v1/admin/getAccounts', 'Admin/AuthController.getAccounts');

Route::get('/api/v1/admin/getAccount/:id', 'Admin/AuthController.getAccount');

Route::post('/api/v1/admin/createCourse', 'Admin/CoursesController.createCourse');

Route::get('/api/v1/admin/getCourses', 'Admin/CoursesController.getCourses');

Route::get('/api/v1/admin/getCourse/:id', 'Admin/CoursesController.getCourse');

Route::put('/api/v1/admin/updateCourse/:id', 'Admin/CoursesController.updateCourse');

Route::put('/api/v1/admin/deleteCourse/:id', 'Admin/CoursesController.deleteCourse');

Route::get('/api/v1/admin/getLessons/:courseId', 'Admin/LessonsController.getLessons');

Route::get('/api/v1/admin/getLesson/:courseId/:lessonId', 'Admin/LessonsController.getLesson');

Route::post('/api/v1/admin/createLesson/:courseId', 'Admin/LessonsController.createLesson');

Route::put('/api/v1/admin/updateLesson/:courseId/:lessonId', 'Admin/LessonsController.updateLesson');

Route::delete('/api/v1/admin/deleteLesson/:courseId/:lessonId', 'Admin/LessonsController.deleteLesson');



// Instructor
