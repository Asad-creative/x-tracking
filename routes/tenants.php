<?php
use App\Project;

Route::middleware('web')
    ->namespace('App\\Http\\Controllers\\')
    ->group(function ()
    {
        #Auth::routes();
        Route::get('/', function () {

        $project =  Project::all();
            print_r($project);
            exit;
            return view('welcome');
        });
        Route::get('/home', 'HomeController@index')->name('home');
    });
