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

Route::get('/','App\Http\Controllers\RecordController@show');
Route::get('delete_record/{id}','App\Http\Controllers\RecordController@destroy');
Route::view('Add','Add_record');
Route::get('insert_record','App\Http\Controllers\RecordController@store');
Route::get('reset_record/{id}','App\Http\Controllers\RecordController@update');
Route::post('update_record/{id}','App\Http\Controllers\RecordController@edit')->name('updt');

