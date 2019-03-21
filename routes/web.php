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
    return view('pages.home');
});

Route::get('/webix-table', function () {
    return view('webix.datatable');
});

Route::get('/demo-1', function () {
    return view('pages.demo-1');
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


Route::get('/calendar', function () {
    //return view('welcome');
    return view('pages.about');
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

Route::get('/color', function () {
    return view('pages.color');
});

// Index / Navigation
Route::get('all', function () {
    return view('all');
});

// Style Guide
Route::get('style-guide', function () {
    return view('style-guide');
});


// Tree Table
Route::get('/treetable', function () {
    return view('pages.tree-table');
});


//Pagination
Route::get('/pagination', function () {
    return view('webix.pagination');
});


//Filter Demo
Route::get('/filter', function () {
    return view('webix.filter');
});
