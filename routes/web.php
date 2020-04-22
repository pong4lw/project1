<?php

Route::auth();

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/register_mail/{email}_{id}', 'Auth\RegisterController@register_mail')->where('email', '.+');
Route::get('/login_mail/{email}_{id}', 'Auth\RegisterController@loginCheck')->where('email', '.+');
Route::view('/welcome', 'welcome');

Route::get('/user/index', 'UserController@index');
Route::get('/client/search', 'ClientController@search');
Route::get('/client/reservation', 'ClientController@reservation');
Route::get('/client/staff', 'ClientController@staff');
Route::get('/client/complate', 'ClientController@complate');

Route::get('/client/create', 'ClientController@create')->name('client.create');

