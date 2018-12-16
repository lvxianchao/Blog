<?php

// 登录退出
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // 修改密码
    Route::patch('password', 'Auth\ResetPasswordController@reset')->name('password');
    // 后台主页
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    // 标签管理
    Route::resource('tags', 'Admin\TagController', ['except' => ['show']])->names('tags');
});
