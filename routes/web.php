<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('beranda');
Route::get('/tentang-kami', 'AboutController@index')->name('tentang_kami');
Route::get('/menu-lazatto', 'MenuController@index')->name('menu');

Route::get('/news/read/{slug}', 'NewsController@detail')->name('news.read');

Route::get('/news-&-update', 'NewsController@index')->name('news');
Route::get('/lokasi-outlet', 'LocationController@index')->name('location');
Route::get('/contact-us', 'ContactController@index')->name('contact');
Route::post('/contact-us/inbox/add', 'ContactController@inboxAdd')->name('contact.inbox.add');

// Route::get('/news-&-update', 'NewsController');
// Route::resource('/lokasi-outlet', 'LokasiController');
// Route::resource('/contact-us', 'ContactController');