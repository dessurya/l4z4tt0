<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'HomeController');
Route::resource('/tentang-kami', 'AboutController');
Route::resource('/menu-lazatto', 'MenuController');
Route::resource('/news-&-update', 'NewsController');
// Route::resource('/lokasi-outlet', 'LokasiController');
// Route::resource('/contact-us', 'ContactController');