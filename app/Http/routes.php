<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'PagesController@sayHello');
Route::get('goodbye', 'PagesController@sayGoodbye');
Route::get('hunger', 'PagesController@askIfHungry');

