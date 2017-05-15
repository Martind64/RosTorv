<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/forside', function () {
    return view('forside-shops');
});
Route::get('/forside-admin', function () {
    return view('admin-shop-forside');
});
Route::get('/header', function () {
    return view('header');
});

