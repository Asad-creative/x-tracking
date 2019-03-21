<?php
use App\Project;

Route::middleware('web')
    ->namespace('App\\Http\\Controllers\\')
    ->group(function ()
    {
        #Auth::routes();
        Route::get('/', function () {

            $projects =  Project::all()->toArray();

            return view('customers.project.list',['projects'=>$projects]);
        });
        Route::get('/home', 'HomeController@index')->name('home');
    });
