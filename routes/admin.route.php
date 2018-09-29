<?php

//Route::get('/admin/login',);

Route::get('/admin/index', 'Admin\IndexController@index');

Route::resource('/admin/users', 'Admin\UsersController');

Route::resource('/admin/ads','Admin\AdsController');
Route::get('/admin/ads/lock/{id}','Admin\AdsController@lock');
Route::get('/admin/ads/unlock/{id}','Admin\AdsController@unlock');

