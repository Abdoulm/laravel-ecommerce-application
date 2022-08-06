<?php
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\LonginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LonginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LonginController@logout')->name('admin.logout');

    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
});

?>