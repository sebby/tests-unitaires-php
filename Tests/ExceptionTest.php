<?php

require "Classes/Calculator.php";
use App\Classes\Calculator;


class ExceptionTest extends PHPUnit_Framework_TestCase{
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
  public function provider()
  {
    return array(
      array(new stdClass(), 0),
      array('string', 0),
      array(0, new stdClass())
      );
  }
  /**
   * @dataProvider provider
   */
  public function testShouldThrowException($a, $b)
  {
    //THEN
   $this->setExpectedException(
            'InvalidArgumentException', 'Wrong parameters given'
    );
    //WHEN
    $this->calcul->add($a, $b);
  }
  /**
   * Avec la méthode $this->fail, nous avons toujours une échec
   * @return [type] [description]
   */
  public function testFailAlways(){
    //$this->fail('Toujours en échec.');
  }
  /**
   * Test si la $calcul est une instance de Calculator
   * @return [type] [description]
   */
  public function testInstanceCalculator(){
    $this->assertInstanceOf('App\Classes\Calculator',  $this->calcul);
  }
}
