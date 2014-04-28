<?php namespace HeigVd\Infos;
 
class Infos {
  protected static $infos = array('towns' => 
        array('Neuchâtel', 'Yverdon'));
    
  public static function SchoolInfos()
  {
      return self::$infos;
  }
  
  public static function activityToday()
  {
    $dw = date( "w");
    return 
      $dw == 2 ? 'go to '.self::$infos['towns'][0] : 
      $dw == 4 ? 'go to '.self::$infos['towns'][1] : 
        'stay home';
  }
}