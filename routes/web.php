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
    return (auth()->check()) ? redirect('/home') : redirect('/auth/login');
});
Route::get('/auth/login', function () {
    return view('auth.index');
});
Route::post('auth/login', [
    'uses' => 'Auth\LoginController@login',
    'as' => 'login'
]);
Route::get('auth/logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'logout',
]);
Route::get('/forgot/password' , function () {
    return view('auth/forgotPassword');
});
Route::post('password/email', [
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
    'as' => 'postPasswordEmail'
]);
Route::get('password/reset/{token?}', [
    'uses' => 'Auth\ResetPasswordController@showResetForm',
    'as' => 'password.reset'
]);
Route::post('password/reset', [
    'uses' => 'Auth\ResetPasswordController@reset',
    'as' => 'postPasswordReset'
]);

Route::group(['middleware' => 'auth.basic'], function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/home/getCurrentUser', [
        'uses' => 'UserController@getCurrentUser',
        'as' => 'getCurrentUser'
    ]);
    Route::get('/home/getProducts', function() {
        return auth()->user()->products()->get();
    });
});

