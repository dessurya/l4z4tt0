<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('beranda');
Route::get('/tentang-kami', 'AboutController@index')->name('tentang_kami');
Route::get('/menu-lazatto', 'MenuController@index')->name('menu');
// Route::get('/news-&-update', 'MenuController@index')->name('news');
// Route::get('/lokasi-outlet', 'MenuController@index')->name('location');
// Route::get('/contact-us', 'MenuController@index')->name('contact');
// Route::get('/news-&-update', 'NewsController');
// Route::resource('/lokasi-outlet', 'LokasiController');
// Route::resource('/contact-us', 'ContactController');