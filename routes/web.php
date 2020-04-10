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



Route::get('/', 'APODController@index')->name('index');
Route::get('/SBdatabase', 'SMDBController@index')->name('smallbodies');
Route::post('/SBdatabase-insert', 'SMDBController@insert')->name('smallbodies-insert');
/*Route::get('/SBdatabaseEdit/{id}', function () {
    return view('SBdatabaseEdit');
});*/
Route::get('/SBdatabaseEdit/{id}', 'SMDBController@indexUpdate');
Route::post('/SBdatabaseEdit/{id}', 'SMDBController@update')->name('smallbodies-update');
Route::get('/SBdatabase-delete/{id}', 'SMDBController@delete')->name('smallbodies-delete');


/*
Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/cars-update', 'CarsController@update')->name('cars-update');
Route::get('/cars-delete', 'CarsController@delete')->name('cars-delete');
Route::post('/cars-insert', 'CarsController@insert')->name('cars-insert');
*/