<?php namespace HeigVd\Infos\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Infos extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'infos'; }
 
}