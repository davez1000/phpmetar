<?php

namespace PhpMetar\Cloud;

/**
 * 
 */
class Cloud
{
  
  /**
   * 
   */
  public function __construct()
  {
    
  }

  public function getRegex() {
    $no_cloud = "(NSC|NCD|CLR|SKC)";
    $layer = "(FEW|SCT|BKN|OVC|///)([0-9]{3}|///)(CB|TCU|///)?";
    $vertical_visibility = "VV([0-9]{3}|///)";
    return "#^($no_cloud|($layer)( $layer){,3}( $vertical_visibility)?)( )#";
  }

  public function parse($metar) {

  }

}

