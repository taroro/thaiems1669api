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

Route::get('/api/accident/{id?}', 'AccidentCaseController@index');
Route::post('/api/accident', 'AccidentCaseController@store');
Route::post('/api/accident/{id}', 'AccidentCaseController@update');
Route::delete('/api/accident/{id}', 'AccidentCaseController@destroy');
