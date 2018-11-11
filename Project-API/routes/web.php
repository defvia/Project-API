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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/', 'Auth\LoginController@index');
Route::post('login','Auth\LoginController@postLogin');
Route::post('logout','Auth\LoginController@logout');

Route::get('dashboard', function () {
    return view('masterdata.dashboard');
});

Route::get('pesan', function () {
    return view('masterdata.pesan');
});

Route::post('kirim','DashboardController@store');
