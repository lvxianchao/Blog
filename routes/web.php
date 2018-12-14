<?php

// 登录退出
Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Admin\LoginController@login');
Route::post('/admin/logout', 'Admin\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
