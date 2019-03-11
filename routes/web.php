<?php
use App\User;
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
    return view('Proteus');
});

Route::group([
	'prefix' => 'webix'
], function () {
	Route::get('datatable', function () {
	    return view('webix.datatable');
	});

	Route::get('dynamic/datatable', function () {
	    return view('webix.dynamic-datatable');
	});

	Route::get('get/datatable', 'HomeController@datatable');

	Route::get('organogram', function () {
	    return view('webix.organogram');
	});

	Route::get('gantt', function () {
	    return view('webix.gantt');
	});

	Route::get('dynamic/gantt', function () {
	    return view('webix.dynamic-gantt');
	});

	Route::get('get/gantt', 'HomeController@gantt');

	Route::resource('gantt/task', 'TaskController');
	Route::resource('gantt/link', 'LinkController');
});

Route::get('/webix/get/datatable', 'HomeController@datatable');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

