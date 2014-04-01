<?php

class TestController extends BaseController
{
  public function index()
  {
    return View::make('index');
  }
  
  protected function setupLayout()
  {} 
}