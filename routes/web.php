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
    Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard0');
    Route::get('admin/item', 'AdminController@itemlist')->name('itemlist0');
    Route::post('admin/item-action', 'AdminController@itemaction')->name('itemaction0');
    Route::get('admin/item/detail/{id}', 'AdminController@viewitem')->name('viewitem0');
    Route::get('admin/item/edit/{id}', 'AdminController@edititem')->name('edititem0');
    Route::post('admin/item/edit', 'AdminController@updateitem');
});
// Super Admin Special Route
Route::group(['middleware' => 'auth:superadmin'], function () {
    Route::get('/superadmin/dashboard', 'SuperAdminController@dashboard')->name('dashboard1');
    Route::get('/superadmin/item', 'SuperAdminController@itemlist')->name('itemlist1');
    Route::post('/superadmin/item-action', 'SuperAdminController@itemaction')->name('itemaction1');
});
