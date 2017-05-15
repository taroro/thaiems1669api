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
    return view('index');
});

// API Accident
Route::get('/api/accident/{id?}', 'ThaiEms1669\AccidentController@index'); // Get accident's detail by id, Empty id to list all
// Route::get('/api/accident/search/{keyword?}', 'ThaiEms1669\AccidentController@search');
Route::post('/api/accident', 'ThaiEms1669\AccidentController@insert'); // Insert accident to DB
Route::post('/api/accident/{id}', 'ThaiEms1669\AccidentController@update'); // Update accident detail by id
Route::delete('/api/accident/{id}', 'ThaiEms1669\AccidentController@delete'); // Delete accident from DB by id

// API Car
