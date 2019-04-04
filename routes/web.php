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
    return view('pages.home');
});

Route::get('/webix-table', function () {
    return view('webix.datatable');
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
	Route::post('datatable/action', 'HomeController@datatable_action');

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

Route::get('gauge', function () {
    return view('highcharts.gauge');
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



// Tree Table
Route::get('/table', function () {
    return view('webix.dynamic-datatable');
});



//Pagination
Route::get('/pagination', function () {
    return view('webix.pagination');
});


//Filter Demo
Route::get('/filter', function () {
    return view('webix.filter');
});
