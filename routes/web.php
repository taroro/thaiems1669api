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

Route::get('/fcm', function () {
    return view('accident.testFCM');
});

Route::get('/accident/detail/{id?}', 'web\AccidentController@detail');
Route::get('/accident/edit/{id?}', 'web\AccidentController@edit');
Route::get('/accident/add/', 'web\AccidentController@add');

// API Accident
Route::get('/api/accident/{id?}', 'api\AccidentController@index'); // Get accident's detail by id, Empty id to list all
Route::post('/api/accident', 'api\AccidentController@insert'); // Insert accident to DB
Route::post('/api/accident/{id}', 'api\AccidentController@update'); // Update accident detail by id
Route::delete('/api/accident/{id}', 'api\AccidentController@delete'); // Delete accident from DB by id

// API Car
