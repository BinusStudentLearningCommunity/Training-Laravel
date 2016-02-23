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

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('/namaLink', array('as' => 'namaRoutes', 'uses' => 'NamaController@fungsi') );

Route::get('/', array('as' => 'home.index', 'uses' => 'HomeController@index') );
Route::get('/items', array('as' => 'items.index', 'uses' => 'ItemController@index') );

Route::get('/items/create', array('as' => 'items.create', 'uses' => 'ItemController@create') );
Route::post('items/insert', array('as' => 'items.doPost', 'uses' => 'ItemController@postItem') );

Route::get('items/update/{id}', array('as' => 'items.update', 'uses' => 'ItemController@update') );
// {id} untuk passing variable id
Route::post('items/edit', array('as' => 'items.edit', 'uses' => 'ItemController@edit'));

//DELETE
Route::delete('items/destroy/{id}', array('as' => 'items.destroy', 'uses' => 'ItemController@destroy'));