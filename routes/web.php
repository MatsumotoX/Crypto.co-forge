<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'PagesController@getIndex');

Route::get('/terms-of-service', 'PagesController@getTerm');

Route::get('/privacy-policy', 'PagesController@getPrivacy');

Route::get('liveprices', 'LivePrice\LivePriceController@compileOrder');



