<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 24/11/2014
 * Time: 18:55
 */
namespace Tests\WEB2\Validator;

use WEB2\Validator\IntegerValidator;

/**
 * Class IntegerValidatorTest
 * @package Tests\WEB2\Validator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testEqual(){
        $integer = 2;
        $test = 2;
        $this->assertTrue(IntegerValidator::equal($integer, $test));
    }

    /**
     * @throws \Exception
     */
    public function testSuperior()
    {
        $integer = 5;
        $number = 2;
        $this->assertTrue(IntegerValidator::superior($integer, $number));
    }

    /**
     * @throws \Exception
     */
    public function testInferior()
    {
        $integer = 2;
        $number = 5;
        $this->assertTrue(IntegerValidator::lower($integer, $number));
    }

    /**
     * @throws \Exception
     */
    public function testBetween()
    {
        $integer = 5;
        $min = 1;
        $max = 10;
        $this->assertTrue(IntegerValidator::between($integer, $min, $max));
    }

    /**
     * @throws \Exception
     */
    public function testNegative()
    {
        $integer = -2;
        $this->assertTrue(IntegerValidator::negative($integer));
    }

    /**
     * @throws \Exception
     */
    public function testPositive()
    {
        $integer = 2;
        $this->assertTrue(IntegerValidator::positive($integer));
    }


} 