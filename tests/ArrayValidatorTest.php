<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 25/11/2014
 * Time: 20:08
 */

namespace Tests\WEB2\Validator;

use WEB2\Validator\ArrayValidator;

/**
 * Class ArrayValidatorTest
 * @package Tests\WEB2\Validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testIsEmpty()
    {
        $array = [];
        $this->assertTrue(ArrayValidator::isEmpty($array));
    }

    /**
     * @throws \Exception
     */
    public function testEqualArray()
    {
        $array = ["abc"];
        $nbr = 1;
        $this->assertTrue(ArrayValidator::equalArray($array, $nbr));
    }

    /**
     * @throws \Exception
     */
    public function testSuperiorArray()
    {
        $array = ["abc", "abc"];
        $nbr = 1;
        $this->assertTrue(ArrayValidator::superiorArray($array, $nbr));
    }

    /**
     * @throws \Exception
     */
    public function testSuperiorEqualArray()
    {
        $array = ["abc", "abc"];
        $nbr = 2;
        $this->assertTrue(ArrayValidator::superiorEqualArray($array, $nbr));
    }

    /**
     * @throws \Exception
     */
    public function testInferiorArray()
    {
        $array = ["abc"];
        $nbr = 2;
        $this->assertTrue(ArrayValidator::inferiorArray($array, $nbr));
    }

    /**
     * @throws \Exception
     */
    public function testInferiorEqualArray()
    {
        $array = ["abc"];
        $nbr = 1;
        $this->assertTrue(ArrayValidator::inferiorEqualArray($array, $nbr));
    }

    /**
     * @throws \Exception
     */
    public function testBetweenArray()
    {
        $array = ["abc", "abc"];
        $min = 1;
        $max = 3;
        $this->assertTrue(ArrayValidator::betweenArray($array, $min, $max));
    }

    /**
     *
     */
    public function testKeyArray()
    {
        $key = "abc";
        $array = ["abc" => "key"];
        $this->assertTrue(ArrayValidator::keyArray($key, $array));
    }

    /**
     *
     */
    public function testValueExists()
    {
        $value = "abc";
        $array = ["key" => "abc"];
        $this->assertTrue(ArrayValidator::valueExists($value, $array));
    }
}