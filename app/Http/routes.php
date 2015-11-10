<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware'=>'guest'],function(){

	Route::get('nerds',[
		'uses' 	=> 'NerdController@index',
		'as'	=> 'nerds'
	]);

	Route::get('nerds/create',[
		'uses' 	=> 'NerdController@create'
	]);

	Route::post('nerds',[
		'uses' 	=> 'NerdController@store'
	]);

	Route::get('nerds/{id}',[
		'uses' 	=> 'NerdController@show'
	]);

	Route::get('nerds/edit/{id}',[
		'uses' 	=> 'NerdController@edit'
	]);

	Route::put('nerds/update/{id}',[
		'uses' 	=> 'NerdController@update',
		'as'	=> 'nerds.update'
	]);

	Route::delete('nerds/delete/{id}',[
		'uses' => 'NerdController@destroy'
	]);
});