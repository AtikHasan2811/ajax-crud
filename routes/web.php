<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within name_available group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/view','studentController@index')->name('view');
Route::post('/student/store','studentController@store')->name('store');
Route::get('student/edit/{id}','studentController@edit')->name('edit');
Route::post('/student/update/','studentController@update')->name('update');
Route::post('student/delete/','studentController@delete')->name('delete');
//show password

Route::get('show_password','studentController@show_password')->name('show_password');

Route::get('/name_availble', function () {
    return view('name_available.view');
});

Route::post('username','studentController@username')->name('username');
