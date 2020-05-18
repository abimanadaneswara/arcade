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

// Route::get('/', function () {
//     return view('auth.loginadmin');
// });

//login admin
// Route::get('/loginadmin','AuthController@login');
// Route::post('/proseslogin','AuthController@proseslogin');

//login owner
// Route::get('/loginowner','AuthController@login');
// Route::get('/logout','AuthController@logout');

//User
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::group(['prefix' => 'admin'], function(){
    //login & logout
    Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('dashboard.index');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\ResetPasswordContoller@reset');

    //menu
    Route::get('/dashboards','DashboardController@dashboard')->name('dashboards.index');
    Route::get('/kategori','KategoriController@kategori')->name('kategori.index');
    Route::post('/kategori/create','KategoriController@create')->name('kategori.create');
    Route::get('/kategori/{id_kategori}/edit','KategoriController@edit')->name('kategori.edit');
    Route::post('/kategori/{id_kategori}/update','KategoriController@update')->name('kategori.update');
    Route::get('/kategori/{id_kategori}/delete','KategoriController@delete')->name('kategori.delete');
});