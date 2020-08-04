<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
