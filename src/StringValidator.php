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
        return ($length === mb_strlen($string)) ? true : false;
    }

    /**
     * @param $string
     * @param $length
     * @return bool
     */
    public static function stringSuperior($string,$length)
    {
        return (mb_strlen($string) > $length) ? true : false;
    }

    /**
     * @param $string
     * @param $length
     * @return bool
     */
    public static function stringInferior($string,$length)
    {
        return (mb_strlen($string) < $length) ? true : false;
    }

    /**
     * @param $string
     * @param $lengthMin
     * @param $lengthMax
     * @return bool
     */
    public static function stringBetween($string,$lengthMin,$lengthMax)
    {
        return (mb_strlen($string) >= $lengthMin && mb_strlen($string) <= $lengthMax) ? true : false;
    }

    /**
     * @param $string
     * @return bool
     */
    public static function stringWhiteSpace($string)
    {
        return (mb_substr($string, -1) != ' ' && mb_substr($string, 0, 1) != ' ') ? true : false;
    }

    /**
     * @param $string
     * @return bool
     */
    public static function stringNoWhiteSpace($string)
    {
        return (mb_substr_count($string, ' ') == 0) ? true : false;
    }
}