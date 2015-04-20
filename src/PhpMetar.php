<?php
/**
 * @file
 *
 */

namespace PhpMetar;

use PhpMetar\Icao;

/**
 * PhpMetar class.
 */
class PhpMetar {

  private $_metar;

  /**
   *  Metar sections, in order.
   */
  private $_sections = [
    //'Type',
    'Icao',
    //'Date',
    //'Status',
    //'Wind',
    //'Visibility',
    //'Rvr',
    //'Weather',
    //'Cloud',
    //'Temperature',
    //'Qnh',
    //'Recent',
    //'WindShear',
  ];

  public function __construct($metar) {
    $this->_metar = $metar;
  }

  /**
   * Returns raw metar string.
   *
   * @return string
   *  The raw metar.
   */
  public function getMetar() {
    return $this->_metar;
  }

  /**
   * Split metar string, and send parts to appropriate classes for parsing.
   *
   * @param $metar
   *  The raw metar string.
   * @return
   *
   */
  public function parse($metar) {
    $metar_sections = preg_split('/\s+/', $metar);
    print_r($metar_sections); exit;
    
    foreach($this->_sections as $section) {
      $section_class = new $section;
      $section_result = $section_class->parse($metar);
      // todo
    }
  }

}

