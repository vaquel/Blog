<?php


//Route::get('/', 'GameController@plane');

Route::get('/', 'BlogController@login');

Route::get('/ridicule', 'BlogController@ridicule');

Route::get('/technology', 'BlogController@technology');

Route::get('/faith', 'BlogController@faith');

Route::get('/me', 'BlogController@index');

