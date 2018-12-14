<?php

// 登录退出
Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Admin\LoginController@login');
Route::post('/admin/logout', 'Admin\LoginController@logout')->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // 后台主页
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
});
