<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@redirectLogin');
Route::get('login', 'AuthController@login')->name('login');
Route::post('signin', 'AuthController@signin')->name('signin');

Route::middleware('user')->group(function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('signout', 'AuthController@signout')->name('signout');

    Route::name('user.')->prefix('user/')->group(function(){
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::post('/profile/store', 'UserController@profileStore')->name('profile.store');
        Route::post('/data', 'UserController@data')->name('data');
        Route::post('/delete', 'UserController@delete')->name('delete');
        Route::post('/reset/password', 'UserController@resetPassword')->name('reset.password');
        Route::name('form.')->prefix('form/')->group(function(){
            Route::post('/new', 'UserController@formNew')->name('new');
            Route::post('/update', 'UserController@formUpdate')->name('update');
        });
        Route::name('store.')->prefix('store/')->group(function(){
            Route::post('/new', 'UserController@storeNew')->name('new');
            Route::post('/update', 'UserController@storeUpdate')->name('update');
        });
    });

    Route::name('site.page.')->prefix('site/page')->group(function(){
        Route::get('/', 'SitePageController@index')->name('index');
        Route::post('/data', 'SitePageController@data')->name('data');
        Route::post('/form', 'SitePageController@form')->name('form');
        Route::name('store.')->prefix('store')->group(function(){
            Route::post('/beranda', 'SitePageController@storeBeranda')->name('beranda');
            Route::post('/tentang_kami', 'SitePageController@storetentangKami')->name('tentang_kami');
            Route::post('/menu', 'SitePageController@storeMenu')->name('menu');
            Route::post('/news', 'SitePageController@storeNews')->name('news');
            Route::post('/location', 'SitePageController@storeLocation')->name('location');
            Route::post('/contact', 'SitePageController@storeContact')->name('contact');
        });
        Route::post('/show/or/hide', 'SitePageController@showOrHide')->name('show.or.hide');
    });

    Route::name('picture.')->prefix('picture')->group(function(){
        Route::get('/', 'PictureController@index')->name('index');
        Route::post('/data', 'PictureController@data')->name('data');
        Route::post('/form', 'PictureController@form')->name('form');
        Route::post('/store', 'PictureController@store')->name('store');
        Route::post('/prop', 'PictureController@prop')->name('prop');
        Route::post('/delete', 'PictureController@delete')->name('delete');
    });

    Route::name('menu.')->prefix('menu')->group(function(){
        Route::get('/', 'MenuController@index')->name('index');
        Route::post('/data', 'MenuController@data')->name('data');
        Route::post('/flag', 'MenuController@flag')->name('flag');
        Route::post('/delete', 'MenuController@delete')->name('delete');
        Route::name('form.')->prefix('form/')->group(function(){
            Route::post('/new', 'MenuController@formNew')->name('new');
            Route::post('/update', 'MenuController@formUpdate')->name('update');
        });
        Route::name('store.')->prefix('store/')->group(function(){
            Route::post('/new', 'MenuController@storeNew')->name('new');
            Route::post('/update', 'MenuController@storeUpdate')->name('update');
        });
    });

    Route::name('slider.')->prefix('slider')->group(function(){
        Route::get('/', 'SliderController@index')->name('index');
        Route::post('/data', 'SliderController@data')->name('data');
        Route::post('/flag', 'SliderController@flag')->name('flag');
        Route::post('/delete', 'SliderController@delete')->name('delete');
        Route::name('form.')->prefix('form/')->group(function(){
            Route::post('/new', 'SliderController@formNew')->name('new');
            Route::post('/update', 'SliderController@formUpdate')->name('update');
        });
        Route::name('store.')->prefix('store/')->group(function(){
            Route::post('/new', 'SliderController@storeNew')->name('new');
            Route::post('/update', 'SliderController@storeUpdate')->name('update');
        });
    });

    Route::name('kemitraan.')->prefix('kemitraan')->group(function(){
        Route::get('/', 'KemitraanController@index')->name('index');
        Route::post('/data', 'KemitraanController@data')->name('data');
        Route::post('/flag', 'KemitraanController@flag')->name('flag');
        Route::post('/delete', 'KemitraanController@delete')->name('delete');
        Route::name('form.')->prefix('form/')->group(function(){
            Route::post('/new', 'KemitraanController@formNew')->name('new');
            Route::post('/update', 'KemitraanController@formUpdate')->name('update');
        });
        Route::name('store.')->prefix('store/')->group(function(){
            Route::post('/new', 'KemitraanController@storeNew')->name('new');
            Route::post('/update', 'KemitraanController@storeUpdate')->name('update');
        });
    });

    Route::name('location.')->prefix('location')->group(function(){
        Route::get('/', 'LocationController@index')->name('index');
        Route::post('/data', 'LocationController@data')->name('data');
        Route::post('/flag', 'LocationController@flag')->name('flag');
        Route::post('/delete', 'LocationController@delete')->name('delete');
        Route::name('form.')->prefix('form/')->group(function(){
            Route::post('/new', 'LocationController@formNew')->name('new');
            Route::post('/update', 'LocationController@formUpdate')->name('update');
        });
        Route::name('store.')->prefix('store/')->group(function(){
            Route::post('/new', 'LocationController@storeNew')->name('new');
            Route::post('/update', 'LocationController@storeUpdate')->name('update');
        });
    });
});