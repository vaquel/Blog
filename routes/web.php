<?php


Route::get('/', 'BlogController@index');

Route::get('/increment', 'BlogController@increment');

Route::post('/increment', 'BlogController@doIncrementNote');

Route::post('/increment/content', 'BlogController@doIncrementContent');
