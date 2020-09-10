<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('beranda');
Route::get('/tentang-kami', 'AboutController@index')->name('tentangkami');
Route::get('/menu-lazatto', 'MenuController@index');
// Route::get('/news-&-update', 'NewsController');
// Route::resource('/lokasi-outlet', 'LokasiController');
// Route::resource('/contact-us', 'ContactController');