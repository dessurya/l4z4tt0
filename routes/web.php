<?php

use Illuminate\Support\Facades\Route;

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

Route::name('cms.')->prefix('cms/')->group(function(){
    Route::get('/', 'Cms\AuthController@redirectLogin');
    Route::get('login', 'Cms\AuthController@login')->name('login');
    Route::post('signin', 'Cms\AuthController@signin')->name('signin');

    Route::middleware('user')->group(function() {
        Route::get('dashboard', 'Cms\DashboardController@index')->name('dashboard');
        Route::get('signout', 'Cms\AuthController@signout')->name('signout');

        Route::name('user.')->prefix('user/')->group(function(){
            Route::get('/', 'Cms\UserController@index')->name('index');
            Route::post('/data', 'Cms\UserController@data')->name('data');
            Route::post('/reset/password', 'Cms\UserController@resetPassword')->name('reset.password');
            Route::post('/form', 'Cms\UserController@form')->name('form');
            Route::post('/delete', 'Cms\UserController@delete')->name('delete');
            Route::post('/store', 'Cms\UserController@store')->name('store');
        });
    });
});