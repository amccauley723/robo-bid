<?php

Route::get('/', 'PagesController@homePage');
Route::get('/account-login', 'PagesController@accountLogin');
Route::get('/view-packages', 'PagesController@viewPackages');
Route::get('/contact', 'PagesController@contact');

//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');

Route::resource('articles', 'ArticlesController');
Route::resource('accounts', 'AccountsController');
