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

/*Route::get('/', array('as'=> 'root', 'uses' => function()
  { return '<h1>hello from root!<h1>';}));*/
           
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

Route::get('my/index', array('as'=>'my_controller', 'uses' => 'MyController@index'));

Route::get('my/json/{param1}{param2}', array('as'=>'my_json', 'uses' => 'MyController@json'));
