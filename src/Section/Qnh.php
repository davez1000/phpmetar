<?php

namespace PhpMetar\Qnh;

/**
 * 
 */
class Qnh
{
  
  /**
   * 
   */
  public function __construct(argument)
  {
    
  }

  public function getRegex() {
    return '#^(Q|A)(////|[0-9]{4})( )#';
  }

}
