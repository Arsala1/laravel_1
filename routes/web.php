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

Route::get('/', function () {
    return view('welcome');    
});


Route::prefix('article')->group(function () {

	Route::get('/', 'ArticleController@index');
	Route::get('/create', 'ArticleController@create');
	Route::get('/show/{id}', 'ArticleController@show');
	Route::post('/create', 'ArticleController@insert');
	Route::get('/hapus/{id}', 'ArticleController@hapus');
	Route::get('/edit/{id}', 'ArticleController@edit');
	Route::post('/update', 'ArticleController@update');		
});