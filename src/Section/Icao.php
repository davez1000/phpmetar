<?php

namespace PhpMetar\Icao;

/**
 * 
 */
class Icao
{
  
  /**
   * 
   */
  public function __construct(argument)
  {
    
  }

  /**
   *
   */
  public function getRegex() {
    return '#^([A-Z0-9]{4}) #';
  }

  /**
   *
   */
  public function parse($metar) {
    $regex = $this->getRegex();
    if (preg_match($regex, $metar)) {
      return 'matches';
    }
  }

}
