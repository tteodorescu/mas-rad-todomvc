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
/*


Route::get('/test', function()
{
  return 'test vide';
});

Route::get('/test/{id}', function($id)
{
  return 'test '.$id;
});

Route::get('/test/{id}', function($id)
{
  return View::make('simpleview', array('id'=>$id));
});*/

/*Route::get('/', array('as'=> 'root', 'uses' => function()
  { return '<h1>hello from root!<h1>';}));*/
     
Route::get('/', function()
{
	return Redirect::route('tasks_index');
});


/*index of tasks*/
Route::get('task/index', array('as'=> 'tasks_index', 'uses' => 'TaskController@index'));

Route::group(array('before' => 'auth.basic'), function()
{
  /*save du formulaire*/
  Route::post('task/store', 
              array('as' => 'task_store', 'uses' => 'TaskController@store'));

  /*get du formulaire*/
  Route::get('task/create{task?}', 
             array('as'=> 'task_create', 'uses' => 'TaskController@create'));

  /*delete du formulaire*/
  Route::get('task/{id}/destroy', 
              array('as' => 'task_destroy', 'uses' => 'TaskController@destroy'));

  /*edit du formulaire*/
  Route::get('task/{id}/edit', 
             array('as' => 'task_edit', 'uses' => 'TaskController@edit'));
});

Route::post('/test', function(){
  return Response::json(Infos::SchoolInfos());
});

/*Utilities - RAD model creation*/
Route::get('create/traian', function()
{
    $user = new User;
    $user->email = 'traian@test.com';
    $user->username = 'traian.test';
    $user->password = Hash::make('password');
    
    $userdb = DB::table('users')->
      where('username', $user->username)->
      where('email', $user->email)->get();
  
    if (count($userdb) != 0)
    {
      return 'user already exists';
    }
  
    $user->save();
    return 'user saved';
});
