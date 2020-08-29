<?php

use Illuminate\Support\Facades\Route;

Route::name('cms.')->group(function(){
    Route::get('/', 'Cms\AuthController@redirectLogin');
    Route::get('login', 'Cms\AuthController@login')->name('login');
    Route::post('signin', 'Cms\AuthController@signin')->name('signin');

    Route::middleware('user')->group(function() {
        Route::get('dashboard', 'Cms\DashboardController@index')->name('dashboard');
        Route::get('signout', 'Cms\AuthController@signout')->name('signout');

        Route::name('user.')->prefix('user/')->group(function(){
            Route::get('/', 'Cms\UserController@index')->name('index');
            Route::get('/profile', 'Cms\UserController@profile')->name('profile');
            Route::post('/profile/store', 'Cms\UserController@profileStore')->name('profile.store');
            Route::post('/data', 'Cms\UserController@data')->name('data');
            Route::post('/delete', 'Cms\UserController@delete')->name('delete');
            Route::post('/reset/password', 'Cms\UserController@resetPassword')->name('reset.password');
            Route::name('form.')->prefix('form/')->group(function(){
                Route::post('/new', 'Cms\UserController@formNew')->name('new');
                Route::post('/update', 'Cms\UserController@formUpdate')->name('update');
            });
            Route::name('store.')->prefix('store/')->group(function(){
                Route::post('/new', 'Cms\UserController@storeNew')->name('new');
                Route::post('/update', 'Cms\UserController@storeUpdate')->name('update');
            });
        });

        Route::name('site.page.')->prefix('site/page')->group(function(){
            Route::get('/', 'Cms\SitePageController@index')->name('index');
            Route::post('/data', 'Cms\SitePageController@data')->name('data');
            Route::post('/form', 'Cms\SitePageController@form')->name('form');
            Route::post('/store', 'Cms\SitePageController@store')->name('store');
            Route::post('/show/or/hide', 'Cms\SitePageController@showOrHide')->name('show.or.hide');
        });

        Route::name('picture.')->prefix('picture')->group(function(){
            Route::get('/', 'Cms\PictureController@index')->name('index');
            Route::post('/data', 'Cms\PictureController@data')->name('data');
            Route::post('/form', 'Cms\PictureController@form')->name('form');
            Route::post('/store', 'Cms\PictureController@store')->name('store');
            Route::post('/prop', 'Cms\PictureController@prop')->name('prop');
            Route::post('/delete', 'Cms\PictureController@delete')->name('delete');
        });
    });
});