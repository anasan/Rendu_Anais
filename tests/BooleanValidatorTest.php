<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 25/11/2014
 * Time: 20:01
 */

namespace Tests\WEB2\Validator;

use WEB2\Validator\BooleanValidator;

/**
 * Class BooleanValidatorTest
 * @package Tests\WEB2\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param bool $boolean
     */
    public function testIsTrue($boolean = true)
    {
        $this->assertTrue(BooleanValidator::isTrue($boolean));
    }

    public function testIsFalse($boolean = false)
    {
        $this->assertTrue(BooleanValidator::isFalse($boolean));
    }
}