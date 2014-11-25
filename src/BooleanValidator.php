<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 25/11/2014
 * Time: 11:26
 */

namespace WEB2\Validator;


class BooleanValidator
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param $boolean
     * @return bool
     */
    public static function isTrue($boolean)
    {
        return ($boolean == true) ? true : false;
    }
} 