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

// CLIENT
Route::get('client', 'ClientController@index'); // SELECT ALL
Route::post('client', 'ClientController@store'); // INSERT
Route::get('client/{id}', 'ClientController@show'); // SELECT 1
Route::put('client/{id}', 'ClientController@edit'); // UPDATE
Route::delete('client/{id}', 'ClientController@destroy'); // DELETE

// PROJECT
Route::get('project', 'ProjectController@index'); // SELECT ALL
Route::post('project', 'ProjectController@store'); // INSERT
Route::get('project/{id}', 'ProjectController@show'); // SELECT 1
Route::put('project/{id}', 'ProjectController@edit'); // UPDATE
Route::delete('project/{id}', 'ProjectController@destroy'); // DELETE
