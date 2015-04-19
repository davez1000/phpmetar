<?php

namespace PhpMetar\Temperature;

/**
 * 
 */
class Temperature
{
  
  /**
   * 
   */
  public function __construct(argument)
  {
    
  }

  public function regex() {
    $temp_regex = '(M?[0-9]{2})';
    return "#^$temp_regex/$temp_regex #";
  }

}

