<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 24/11/2014
 * Time: 23:29
 */

namespace WEB2\Validator;

class StringValidator
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param $string
     * @param $length
     * @return bool
     */
    public static function stringEqual($string,$length)
    {
        if ($length === mb_strlen($string))
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $string
     * @param $length
     * @return bool
     */
    public static function stringSuperior($string,$length)
    {
        if (mb_strlen($string) > $length)
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $string
     * @param $length
     * @return bool
     */
    public static function stringInferior($string,$length)
    {
        if (mb_strlen($string) < $length)
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $string
     * @param $lengthMin
     * @param $lengthMax
     * @return bool
     */
    public static function stringBetween($string,$lengthMin,$lengthMax)
    {
        if (mb_strlen($string) >= $lengthMin && mb_strlen($string) <= $lengthMax)
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $string
     * @return bool
     */
    public static function stringWhiteSpace($string)
    {
        if (mb_substr($string, -1) != ' ' && mb_substr($string, 0, 1) != ' ')
        {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * @param $string
     * @return bool
     */
    public static function stringNoWhiteSpace($string)
    {
        if (mb_substr_count($string, ' ') == 0)
        {
            return true;
        }
        else {
            return false;
        }
    }
}