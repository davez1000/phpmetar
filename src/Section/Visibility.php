<?php

namespace PhpMetar\Visibility;

/**
 * 
 */
class Visibility
{
  
  /**
   * 
   */
  public function __construct(argument)
  {
    
  }

  public function regex() {
    $cavok = "CAVOK";
    $visibility = "([0-9]{4})";
    $us_visibility = "M?([0-9]{0,2}) ?(([1357])/(2|4|8|16))?SM";
    $minimum_visibility = "( ([0-9]{4})(N|NE|E|SE|S|SW|W|NW)?)?";// optional
    return "#^($cavok|$visibility$minimum_visibility|$us_visibility)( )#";
  }

}

