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

/* 
|-----------------------------------------------
| Akses Halaman Depan
|-----------------------------------------------
*/
Route::view('/', 'welcome');
Route::view('/company-profile', 'company-profile');
Route::view('/courier-cargo', 'courier-cargo');
Route::view('/logistics-supply', 'logistics-supply');
Route::view('/branches-agents', 'branches-agents');
Route::view('/technology', 'technology');
Route::view('/contact-us', 'contact-us');

//Route Lacak
Route::get('/lacak', 'LacakPengirimanController@search');

//Detail Paket
Route::get('/detailpaket/{pengiriman_id}', 'LacakPengirimanController@detail'); 

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
    //LaravoltIndonesia:Get Kota
    Route::get('cities', 'KantorCabangController@cities')->name('cities');
    // Page Kantor Cabang
    Route::resource('/kantor-cabang', 'KantorCabangController');
    // Page Pengelola Cabang
    Route::resource('/pengelola-cabang', 'PengelolaCabangController');
    // Page Kurir
    Route::resource('/kurir', 'KurirController');
    // Page Jarak
    Route::resource('/jarak', 'JarakController');
    // Page Pengiriman
    Route::resource('/pengiriman', 'PengirimanController');
});
