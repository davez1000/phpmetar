<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpMetar\PhpMetar;
use PhpMetar\Test;

//$test = new PhpMetar();
//var_dump($test->testMe());

class PhpMetarTest extends \PHPUnit_Framework_TestCase {

  private $_metar;

  public function __construct() {
    
  }

  public function testConstruct() {
    $t = new PhpMetar();
  }

  public function testParse() {
    $raw_metar = 'EGHI 170820Z 05006KT 010V090 9999 VCSH FEW032 10/03 Q1017';
    
    $this->assertEquals($raw_metar, $t->getMetar());
    
  }

}

