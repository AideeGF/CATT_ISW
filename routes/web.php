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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','HomeController@adminIndex'); 
Route::get('/list_tt','TTermController@indexTT');
Route::get('/create_tt','TTermController@createTT');
Route::post('/save_tt','TTermController@saveTT');
Route::get('/eliminar_tt/{id}','TTermController@deleteTT');
Route::get('/edit_tt','TTermController@editTT');
Route::get("/calendar",'TTermController@showCalendar');
//Route::post('/update_tt/{id}','TTermController@updateTT');



