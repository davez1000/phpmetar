<?php
/**
 * @file
 *
 */

namespace PhpMetar;

/**
 * PhpMetar class.
 */
class PhpMetar {

  /**
   *  Metar sections, in order.
   */
  private $_sections = [
    'Type',
    'Icao',
    'Date',
    'Status',
    'Wind',
    'Visibility',
    'Rvr',
    'Weather',
    'Cloud',
    'Temperature',
    'Qnh',
    'Recent',
    'WindShear',
  ];

  public function __construct() {

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

    foreach($this->_sections as $section) {
      $section_class = new $section;
      $section_result = $section_class->parse($metar);
      // todo
    }
  }

  public function testMe() {
    return 'Testing...';
  }
}

