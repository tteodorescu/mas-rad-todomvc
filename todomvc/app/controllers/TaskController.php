<?php

class TaskController extends BaseController
{
  public function index()
  {
    return View::make('index');
  }
  
  public function create()
  {
    return View::make('task.create');
  }  
  
  public function store()
  {
    //Task::create(Input::all());
    $task = new Task(Input::all());
    //$task->admin = true;
    $task->save();
    //Redirect::route('tasks.index');
  }
  
  public function edit($id)
  {
    $task = Test::find($id);
    
    return View::make('tasks.edit', compact('task')); 
  }
}