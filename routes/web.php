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

	Route::get('datatable-react', function () {
	    return view('webix.datatable-react');
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

	Route::get('schedular', function () {
	    return view('webix.schedular');
	});

	Route::get('dynamic/schedular', function () {
	    return view('webix.dynamic-schedular');
	});

	Route::get('get/schedular', 'EventController@index');
	Route::resource('schedular/events', 'EventController');

	Route::get('calender', function () {
	    return view('webix.calender');
	});
});

Route::get('/webix/get/datatable', 'HomeController@datatable');

Route::get('gauge', function () {
    return view('highcharts.gauge');
});

Route::get('ck-editor', function () {
    return view('ck-editor.document-editor');
});


// React Routes starts here
Route::group([
	'prefix' => 'react'
], function () {
	Route::group([
		'prefix' => 'webix'
	], function () {
		
		Route::get('datatable', function () {
		    return view('webix.datatable-react');
		});

		Route::get('get/datatable', 'HomeController@datatable');
		Route::post('datatable/action', 'HomeController@datatable_action');

		Route::get('gantt', function () {
		    return view('webix.gantt-react');
		});

		Route::get('get/gantt', 'HomeController@gantt');

		Route::resource('gantt/task', 'TaskController');
		Route::resource('gantt/link', 'LinkController');

		Route::get('schedular', function () {
		    return view('webix.schedular-react');
		});

		Route::get('calender', function () {
		    return view('webix.calender-react');
		});
	});

	Route::get('gauge', function () {
	    return view('highcharts.gauge-react');
	});

	Route::get('ck-editor', function () {
	    return view('ck-editor.document-editor-react');
	});
});
// React routes ends here

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

