<?php

Route::get('/', 'PagesController@homePage');
Route::get('/account-login', 'PagesController@accountLogin');
Route::get('/view-packages', 'PagesController@viewPackages');
Route::get('/contact', 'PagesController@contact');

Route::get('articles', 'ArticlesController@index');