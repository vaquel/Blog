<?php


Route::get('/', 'BlogController@index');

Route::get('/increment', 'BlogController@increment');

Route::post('/increment', 'BlogController@doIncrementNote');

Route::post('/increment/content', 'BlogController@doIncrementContent');

Route::get('/content/list', 'BlogController@getContentList');

Route::get('/about', 'AboutMeController@aboutMe');

Route::get('/test', 'TestController@test');
