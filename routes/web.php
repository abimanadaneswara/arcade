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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.loginadmin');
});

//login admin
Route::get('/loginadmin','AuthController@login');
Route::post('/proseslogin','AuthController@proseslogin');

//login owner
Route::get('/loginowner','AuthController@login');

Route::get('/logout','AuthController@logout');

//menu
Route::get('/dashboards','DashboardController@dashboard');
Route::get('/kategori','KategoriController@kategori');