<?php

namespace PhpMetar\Recent;

/**
 * 
 */
class Recent
{

  public static $carac_dic = array(
    'TS','FZ','SH','BL','DR','MI','BC','PR',
  );

  public static $type_dic = array(
    'DZ', 'RA', 'SN', 'SG',
    'PL', 'DS', 'GR', 'GS',
    'UP', 'IC', 'FG', 'BL',
    'SA', 'DU', 'HZ', 'FU',
    'VA', 'PY', 'DU', 'PO',
    'SQ', 'FC', 'DS', 'SS',
    '//',
  
  /**
   * 
   */
  public function __construct(argument)
  {
  }

  public function getRegex() {
    $carac_regexp = implode(self::$carac_dic, '|');
    $type_regexp = implode(self::$type_dic, '|');
    return "#^RE($carac_regexp)?($type_regexp) #";
  } 
  
}

