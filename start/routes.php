<?php 

// Test
Route::get('technical_app/image' , 'ImageController.index');
Route::post('/technical_app/image' , 'ImageController.store');

Route::put('/technical_app/image/:id' , 'ImageController.update');


//Authentication

Route::post('/technical_app/register' , 'AuthController.register');

Route::post('/technical_app/login' , 'AuthController.login');

Route::post('/technical_app/logout' , 'AuthController.logout');

Route::get('/technical_app/user' , 'AuthController.index');

Route::delete('/technical_app/user/:id' , 'AuthController.delete');

// Devices

Route::get('/technical_app/device' , 'DeviceController.index');

Route::get('/technical_app/device/:id' , 'DeviceController.show');

Route::post('/technical_app/device' , 'DeviceController.store');

Route::put('/technical_app/device/:id' , 'DeviceController.update');

Route::delete('/technical_app/device/:id' , 'DeviceController.delete');

// Models

Route::get('/technical_app/model' , 'ModelController.index');

Route::get('/technical_app/model/:id' , 'ModelController.show');

Route::post('/technical_app/model' , 'ModelController.store');

Route::put('/technical_app/model/:id' , 'ModelController.update');

Route::delete('/technical_app/model/:id' , 'ModelController.delete');

// Clients

Route::get('/technical_app/client' , 'ClientController.index');

Route::get('/technical_app/client/:id' , 'ClientController.show');

Route::post('/technical_app/client' , 'ClientController.store');

Route::put('/technical_app/client/:id' , 'ClientController.update');

Route::delete('/technical_app/client/:id' , 'ClientController.delete');

// Techs

Route::get('/technical_app/tech' , 'TechController.index');

Route::get('/technical_app/tech/:id' , 'TechController.show');

Route::post('/technical_app/tech' , 'TechController.store');

Route::put('/technical_app/tech/:id' , 'TechController.update');

Route::delete('/technical_app/tech/:id' , 'TechController.delete');

// Requests

Route::get('/technical_app/order' , 'OrderController.index');

Route::get('/technical_app/order/unexecutedorders' , 'OrderController.unexecutedorders');

Route::get('/technical_app/order/pendingorders' , 'OrderController.pendingorders');

Route::get('/technical_app/order/doneorders' , 'OrderController.doneorders');

Route::get('/technical_app/order/cancelledorders' , 'OrderController.cancelledorders');

Route::get('/technical_app/order/refusedorders' , 'OrderController.refusedorders');

Route::get('/technical_app/order/waitingorders' , 'OrderController.waitingorders');

Route::get('/technical_app/order/:id' , 'OrderController.show');

Route::post('/technical_app/order' , 'OrderController.store');

Route::put('/technical_app/order/:id' , 'OrderController.update');

Route::delete('/technical_app/order/:id' , 'OrderController.delete');

?>