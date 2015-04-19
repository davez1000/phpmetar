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

  public function getRegex() {
    return '#^([A-Z0-9]{4}) #';
  }

  public function parse() {

  }
}
