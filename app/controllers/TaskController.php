<?php

class TaskController extends BaseController
{
  public function index()
  {
    $tasks = Task::paginate(5);
    return View::make('task.index')->with('tasks', $tasks);
  }
  
  public function create($task = null)
  {
    return View::make('task.create')->with('task', $task);
  }  
  
  public function store()
  {
    //only when we want to insert directly into the DB
    //Task::create(Input::all());
    
    //detailed saving, to usealso with updates 
    $task = new Task();
    $task->fill(Input::all());
    
    //    return $task->toJson();
    
    if ($task->isInvalid())
    {
        Input::flash();
        
        return Redirect::route('task_edit', array('id' => $task->id))->
            withErrors($task->validator()->errors());
    }
        
    //    return var_dump($task->tojson());
    
    $task->savetask();
    
    return Redirect::route('tasks_index');
  }
  
  public function edit($id)
  {
    $task = Task::find($id);
    
    return View::make('task.create', compact('task')); 
  }
  
  public function destroy($id)
  {
    $task = Task::find($id);
    $task->delete();
    
    return Redirect::route('tasks_index'); 
  }
}