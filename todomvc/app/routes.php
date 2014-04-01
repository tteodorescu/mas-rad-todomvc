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

Route::get('/test', function()
{
  return 'test vide';
});

/*Route::get('/test/{id}', function($id)
{
  return 'test '.$id;
});*/

Route::get('/test/{id}', function($id)
{
  return View::make('simpleview', array('id'=>$id));
});

Route::get('/controller/index', 'TestController@index');

/* autres exemples
Route::get('/controller/index', array(
            'as' => 'index', 
            'uses' => 'TestController@index');

Route:post('tasks/{tasks}/done', array('as' => 'tasks.done', 'uses' => 'TestController@index'));
*/

/*save du formulaire*/
Route::post('/task/store', array('as' => 'task_store', 'uses' => 'TaskController@store'));

/*get du formulaire*/
Route::get('task/create', array('as'=> 'task_create', 'uses' => 'TaskController@create'));
