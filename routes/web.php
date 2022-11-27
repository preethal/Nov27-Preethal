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

// Student Record
Route::get('/student-record', 'StudentController@index');
Route::get('/form', 'StudentController@create');
Route::get('/edit/{id}', 'StudentController@edit');
Route::post('store', 'StudentController@store');
Route::post('update/{id}', 'StudentController@update');
Route::get('delete/{id}', 'StudentController@destroy');
//


Route::get('changeStatus', 'StudentController@changeStatus');

// Subjects
Route::get('/subject-form', 'SubjectController@create');
Route::post('store-subject', 'SubjectController@store');


