<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get ('/', array('as' => 'base', 'uses' => 'HomeController@base'));

// project group
Route::group (array('prefix' => 'projects'), function() {	
	Route::get ('/', 			array( 'as' => 'project', 			'uses' => 'ProjectsController@index'));
	Route::get ('/vestige', 		array( 'as' => 'project_vestige', 		'uses' => 'ProjectsController@vestige'));
	Route::get ('/cp_buzzard', 	array( 'as' => 'project_cp_buzzard', 	'uses' => 'ProjectsController@cp_buzzard'));
	Route::get ('/zelda', 		array( 'as' => 'project_zelda_level', 	'uses' => 'ProjectsController@zelda'));
	Route::get ('/centerforbrainhealth', 	array( 'as' => 'project_centerforbrainhealth', 'uses' => 'ProjectsController@centerforbrainhealth'));
	Route::get ('/epimed', 	array( 'as' => 'project_epimed', 'uses' => 'ProjectsController@epimed'));
});	

Route::get ('/resume', 	array('as' => 'resume', 'uses' => 'HomeController@resume'));
Route::get ('/about', 	array('as' => 'about', 'uses' => 'HomeController@about'));
