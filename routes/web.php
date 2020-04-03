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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'APODController@index')->name('index');

/*Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', 'ContactController@index');

Route::get('/nba', 'NbaController@index');
Route::get('/nba', 'NbaController@index')->name('nba.index');
Route::get('/countries/{country}', function ($country) {
	return 'Le pays est '.$country;
});

Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/cars-update', 'CarsController@update')->name('cars-update');
Route::get('/cars-delete', 'CarsController@delete')->name('cars-delete');
Route::post('/cars-insert', 'CarsController@insert')->name('cars-insert');
*/