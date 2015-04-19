<?php

namespace PhpMetar\Type;

/**
 * 
 */
class Type
{
  
  /**
   * 
   */
  public function __construct(argument)
  {
    
  }

  public function regex() {
    return '#^((METAR|SPECI)( COR){0,1}) #';
  }

  public function parse($metar) {

  }

}

