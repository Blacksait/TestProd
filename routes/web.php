<?php

Route::get('/', 'MainController@index');

Route::resource('product','ProductController');
Route::resource('category','CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
