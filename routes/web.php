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
    $request = Request::create('http://localhost:8000/api/accident', 'GET');
    //echo "<pre>";
    $results = json_decode(Route::dispatch($request)->getContent());
    //echo "</pre>";
    return view('welcome', ["results" => $results]);
});

Route::get('/api/accident/{id?}', 'AccidentController@index');
Route::post('/api/accident', 'AccidentController@store');
Route::post('/api/accident/{id}', 'AccidentController@update');
Route::delete('/api/accident/{id}', 'AccidentController@destroy');
