<?php
namespace App\Classes;
use InvalidArgumentException;
/**
 *
 */
class Calculator {
  /**
   * [add description]
   * @param [type] $a [description]
   * @param [type] $b [description]
   * @throws InvalidArgumentException
   */
  public function add($a, $b){
    if (!is_numeric($a) || !is_numeric($b)) {
     throw new InvalidArgumentException('Wrong parameters given');
    }
    return $a+$b;
  }
  /**
   * [substract description]
   * @param  [type] $a [description]
   * @param  [type] $b [description]
   * @return [type]    [description]
   */
  public function substract($a, $b){
    return $a - $b;
  }
}

