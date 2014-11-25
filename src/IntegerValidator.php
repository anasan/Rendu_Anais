<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 23/11/2014
 * Time: 12:31
 */
namespace WEB2\Validator;

class IntegerValidator
{
    /**
    * Constructor
    */
    public function __construct()
    {
    }

    /**
     * @param int $nbr
     * @param int $nbr2
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function equal($nbr,$nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
            throw new \Exception("Params they must be numbers");

        return ($nbr == $nbr2) ? true : false;
    }

    /**
     * @param int $nbr
     * @param int $nbr2
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function superior ($nbr, $nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
            throw new \Exception ("Params they must be numbers");

        return ($nbr > $nbr2) ? true : false;
    }

    /**
     * @param int $nbr
     * @param int $nbr2
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function lower ($nbr, $nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
            throw new \Exception ("Params they must be numbers");

        return ($nbr < $nbr2) ? true : false;
    }

    /**
     * @param int $nbr
     * @param int $min
     * @param int $max
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function between($nbr, $min, $max)
    {
        if (!is_int($nbr) || !is_int($min) || !is_int($max))
            throw new \Exception("Params they must be numbers");

        return ($nbr >= $min && $nbr <= $max) ? true : false;
    }

    /**
     * @param int $nbr
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function negative($nbr)
    {
        if (!is_int($nbr))
            throw new \Exception("Params they must be numbers");

        return ($nbr <= 0) ? true : false;
    }

    /**
     * @param int $nbr
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function positive($nbr)
    {
        if (!is_int($nbr))
            throw new \Exception("Params they must be numbers");

        return ($nbr >= 0) ? true : false;
    }
}