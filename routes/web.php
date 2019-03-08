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
    return view('pages.demo');
});


Route::get('/webix/datatable', function () {
    return view('webix.datatable');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', function () {
    //return view('welcome');
    return view('pages.about');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/blog', function () {
    //return view('welcome');
    return view('pages.blog');
});


Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/contact', function () {
    //return view('welcome');
    return view('pages.contact');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/welcome', function () {
    return view('pages.demo');
});