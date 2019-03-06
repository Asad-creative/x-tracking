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
    //return view('welcome');
    return view('dashboard');
});


Route::get('/webix/datatable', function () {
    return view('webix.datatable');
});

Route::get('webix/dynamic/datatable', function () {
    return view('webix.dynamic-datatable');
});

Route::get('/webix/get/datatable', 'HomeController@datatable');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

