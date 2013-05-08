<?php

require 'Classes/RMC.php';
use App\Classes\RMC;
/**
 *
 */
class HeritageTest extends PHPUnit_Framework_TestCase
{
  protected $calcul = NULL;
  /**
   * [setUp description]
   */
  public function setUp(){
    $this->calcul = new RMC();
  }
  /**
   * [tearDown description]
   * @return [type] [description]
   */
  public function tearDown(){
    unset($this->calcul);
  }

  /**
   * Test si la $calcul est une instance de RMC
   * @return [type] [description]
   */
  public function testInstanceRMC(){
    $this->assertInstanceOf('App\Classes\RMC',  $this->calcul);
  }
  /**
   * Test si la $calcul est une instance de Calculator
   * @return [type] [description]
   */
  public function testInstanceCalculator(){
    $this->assertInstanceOf('App\Classes\Calculator',  $this->calcul);
  }
}
