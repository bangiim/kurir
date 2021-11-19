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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

/* 
|-----------------------------------------------
| Level Akses Admin(1), Kurir(2) dan Manager(3)
|-----------------------------------------------
*/
Route::middleware(['auth','ceklevel:1,2,3'])->group(function () {
    // Page Dashboard
    Route::get('/dashboard', 'DashboardController@index');
});

/* 
|-----------------------------------------------
| Level Akses Admin(1)
|-----------------------------------------------
*/
Route::middleware(['auth','ceklevel:1'])->group(function () {
    // Page Account
    Route::resource('/account', 'UserController');
    // Page Kantor Cabang
    Route::resource('/kantor-cabang', 'KantorCabangController');
    // Page Pengelola Cabang
    Route::resource('/pengelola-cabang', 'PengelolaCabangController');
    // Page Kurir
    Route::resource('/kurir', 'KurirController');
});
