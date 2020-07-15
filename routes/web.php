<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'indexController@search');
Route::get('/search', 'indexController@search');
Route::get('/spelunker', 'indexController@index');
Route::get('/id/object/{priref}', 'indexController@record');
Route::get('/id/object/{priref}/{format}', 'indexController@recordSwitch');
Route::get('/id/image/{id}/', 'indexController@image');
Route::match(array('GET','POST'),'/search/results/', 'indexController@results');
Route::get('/id/publication/{id}', 'publicationsController@record');
Route::get('/id/publication/{id}/{format}', 'publicationsController@recordSwitch');
Route::get('/id/terminology/{id}', 'terminologyController@record');
Route::get('/id/terminology/{id}/{format}', 'terminologyController@recordSwitch');
Route::get('/id/agent/{id}', 'agentsController@record');
Route::get('/id/agent/{id}/{format}', 'agentsController@recordSwitch');
