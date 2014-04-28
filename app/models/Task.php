<?php
//a reviser et a verifier comme sont formees les clauses where , 
//puis à verifier $rules, $fillable, $attributes 

class Task extends \Eloquent
{
  // Add your validation rules here
  public static $rules = ['title'=> 'required'];
  
  protected $observables = ['taskevent']; 
  
  //don't forget to fill this array
  protected $fillable = ['title', 'name', 'id'];
  
  protected $attributes = array('done' => false);
  
  public function isValid()
  {
    return Validator::make(
        $this->toArray(),
          array(
            'title'  => 'required|max:100',
            'name'   => 'required')
    )->passes();
  }

  public function scopeActive($query)
  {
    return $query->where('done', '=', false);
  }
  
  public function scopeDone($query)
  {
    return $query->where('done', '=', true);
  }
  
  public function saveTask()
  {
     $this->fireModelEvent('taskevent', false);
  }
  
  public static function taskevent($callback)
	{
		static::registerModelEvent('taskevent', $callback);
	}
  
  public static function boot()
  {
    parent::boot();

    static::creating(function($task)
    {
      //return false;                   
    });
    
    static::taskevent(function($task)
    {
      // $task->name = $task->name.':taskevent';
      
       if ($task->id != 0)
         		$task->exists = true;
      
       $task->done=false;
       $task->save();
    });
  }  
}
//this one should go as an alternative into the global scope, but static inside the class is more elegant
//the same model event can be defined several time, in order to separate functionalities
/*User::creating(function($user)
{
  if ( ! $user->isValid()) 
    return false;
});*/
