<?php

use Illuminate\Support\Facades\Route;

Route::get('/logout', 'GuestController@keluar');
// Guest Route
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'GuestController@dashboard')->name('login');
    Route::post('/login', 'GuestController@masuk');
});
// Admin Route
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/item-list', 'AdminController@itemlist')->name('itemlist');
});
// Super Admin Special Route
Route::group(['middleware' => 'auth:superadmin'], function () {
    Route::get('/superadmin/dashboard', 'SuperadminController@dashboard');
    Route::get('/superadmin/item-list', 'SuperAdminController@itemlist')->name('itemlist');
});
