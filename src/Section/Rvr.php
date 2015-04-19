<?php

namespace PhpMetar\Rvr;

/**
 * 
 */
class Rvr
{
  
  /**
   * 
   */
  public function __construct(argument)
  {
    
  }

  public function regex() {
    $runway = "R([0-9]{2}[LCR]?)/[PM]?([0-9]{4})(FT)?([UDN]?)";
    return "#^($runway)( $runway)?( $runway)?( $runway)?( )#";
  }

}

