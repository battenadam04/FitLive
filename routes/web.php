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



Route::group(['middleware' => ['web']], function () {
    // Authentication Routes
    Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

    // Registration Routes
    Route::get('auth/register', ['as' => 'register','uses' => 'Auth\AuthController@getRegister']);
    Route::post('auth/register', ['as' => 'register.post', 'uses' => 'Auth\AuthController@postRegister']);

    // Password Reset Routes
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');


    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
    Route::get('about', 'PagesController@getAbout');
    Route::get('reviews', 'PagesController@getReviews');
    Route::get('services', 'PagesController@getServices');
    Route::get('/', 'PagesController@getIndex');

});
