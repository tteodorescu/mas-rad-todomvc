<?php

class Users extends Eloquent
{
  protected $fillable = ['name'];
  
  protected $attributes = array('done' => false);
}  