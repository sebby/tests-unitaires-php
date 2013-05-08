<?php

require 'calculator.php';
use App\Calculator;
/**
 *
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
  protected $calcul = NULL;
  /**
   * [setUp description]
   */
  public function setUp(){
    $this->calcul = new Calculator();
  }
  /**
   * [tearDown description]
   * @return [type] [description]
   */
  public function tearDown(){
    unset($this->calcul);
  }

  /**
   * [testAdd description]
   * @param  [type] $a [description]
   * @param  [type] $b [description]
   * @param  [type] $c [description]
   * @return [type]    [description]
   * @dataProvider provider
   */
  public function testAdd($a, $b, $c){
    $sum = $this->calcul->add($a,$b);
    $this->assertEquals($c, $sum);
  }
  public function testSoustraction(){

    $sum = $this->calcul->substract(20,8);
    $this->assertEquals(12, $sum);
  }


  public function provider()
  {
  /*  return array(
      array(1,1,2),
      array(new stdClass(), 0, NULL),
      array('string', 0, NULL),
      array(0, new stdClass(), NULL)
      );
      */
    return array(

        array(0, 0, 0),
        array(0, 1, 1),
        array(10, 1, 11),
        array(1, 1, 2)
    );
  }
}
