<?php

use Illuminate\Http\Request;

Route::get('/', 'ApiController@data');
Route::get('/portfolios', 'ApiController@getPortfolios');
Route::post('/adduser', 'ApiController@addUser');
Route::get('/getUser', 'ApiController@getUser');
