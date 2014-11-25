<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 25/11/2014
 * Time: 19:37
 */

namespace Tests\WEB2\Validator;

use WEB2\Validator\StringValidator;

/**
 * Class StringValidatorTest
 * @package Tests\WEB2\Validator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testStringEqual()
    {
        $string = "Hello";
        $nbr = 5;
        $this->assertTrue(StringValidator::stringEqual($string, $nbr));
    }

    /**
     *
     */
    public function testStringSuperior()
    {
        $string = "Hello";
        $nbr = 2;
        $this->assertTrue(StringValidator::stringSuperior($string, $nbr));
    }

    /**
     *
     */
    public function testStringInferior()
    {
        $string = "Hello";
        $nbr = 10;
        $this->assertTrue(StringValidator::stringInferior($string, $nbr));
    }

    /**
     *
     */
    public function testStringBetween()
    {
        $string = "Hello";
        $min = 1;
        $max = 10;
        $this->assertTrue(StringValidator::stringBetween($string, $min, $max));
    }

    /**
     *
     */
    public function testStringWhiteSpace()
    {
        $string = "Hello";
        $this->assertTrue(StringValidator::stringWhiteSpace($string));
    }

    /**
     *
     */
    public function testNoStringWhiteSpace()
    {
        $string = "Hello";
        $this->assertTrue(StringValidator::stringNoWhiteSpace($string));
    }
}