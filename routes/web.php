<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/register', 'UserController@register'); //registration view 

Route::get('/home', 'HomeController@index');

Route::post('/addUser', 'UserController@addUser'); //add User 
Route::get('/user_list', 'UserController@user_list'); //user list view
Route::get('/deleteUser/{id}', 'UserController@deleteUser'); //delete User 
Route::get('/editUser/{id}', 'UserController@editUser'); //edit User view
Route::post('/updateUser/{id}', 'UserController@updateUser'); //edit User 
