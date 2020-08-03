<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/home', 'StaticPagesController@help');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');
