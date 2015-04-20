<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpMetar\PhpMetar;
use PhpMetar\Test;

class PhpMetarTest extends \PHPUnit_Framework_TestCase {

  private $_metar;

  public function __construct() {
    
  }

  public function testConstruct() {
    $metar = 'EGHI 170820Z 05006KT 010V090 9999 VCSH FEW032 10/03 Q1017';
    $t = new PhpMetar($metar);
  }

  public function testParse() {
    $metar = $t->getMetar();
    $parse_metar = $t->parse($metar);

    $this->assertEquals($raw_metar, $metar);
    
  }

}

