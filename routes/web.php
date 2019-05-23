<?php


Route::get('/', 'UsersController@show');
Route::get('/details/{id}', 'UsersController@getdetails');
