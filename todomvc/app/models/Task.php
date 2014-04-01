<?php
//a reviser et a verifier comme sont formees les clauses where , 
//puis à verifier $rules, $fillable, $attributes 

class Task extends \Eloquent
{
  // Add your validation rules here
  public static $rules = ['title'=> 'required'];
  
  //don't forget to fill this array
  protected $fillable = ['title'];
  
  protected $attributes = array('done' => false);
  
  public function scopeActive($query)
  {
    return $query->where('done', '=', false);
  }
  
  public function scopeDone($query)
  {
    return $query->where('done', '=', true);
  }
}