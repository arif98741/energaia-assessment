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

Route::get('/', 'Web\HomeController@index');
Route::get('/products', 'Web\HomeController@products');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Admin\Auth\LoginController@login');
    Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');

    Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Admin\Auth\RegisterController@register');

    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/login', 'Supplier\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Supplier\Auth\LoginController@login');
    Route::post('/logout', 'Supplier\Auth\LoginController@logout')->name('logout');

    Route::get('/register', 'Supplier\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Supplier\Auth\RegisterController@register');

    Route::post('/password/email', 'Supplier\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'Supplier\Auth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'Supplier\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'Supplier\Auth\ResetPasswordController@showResetForm');
});