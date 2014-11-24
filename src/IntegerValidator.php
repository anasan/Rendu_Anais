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
     * @param $nbr
     * @param $nbr2
     * @throws \Exception
     * @return bool
     */
    public static function equal($nbr,$nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
        {
            throw new \Exception("Params they must be numbers");
        } else if ($nbr == $nbr2)
        {
            return true;
        } else
        {
            return false;
        }
    }
    /**
     * @param $nbr
     * @param $nbr2
     * @return string
     * @throws \Exception
     */
    public static function supperior ($nbr, $nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
        {
            throw new \Exception ("Params are not right, they must be numbers");
        } elseif ($nbr > $nbr2)
        {
            return true;
        } else
        {
            return false;
        }
    }
    /**
     * @param $nbr
     * @param $nbr2
     * @return string
     * @throws \Exception
     */
    public static function lower ($nbr, $nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
        {
            throw new \Exception ("Params are not right, they must be numbers");
        } elseif ($nbr < $nbr2)
        {
            return true;
        } else
        {
            return false;
        }
    }
    /**
     * @param $nbr
     * @param $min
     * @param $max
     * @return string
     * @throws \Exception
     */
    public static function between($nbr, $min, $max)
    {
        if (!is_int($nbr) || !is_int($min) || !is_int($max))
        {
            throw new \Exception("params are not right, they must be numbers");
        }
        else if ($nbr >= $min && $nbr <= $max)
        {
            return true;
        } else {
            return false;
        }
    }
    /**
     * @param $nbr
     * @return string
     * @throws \Exception
     */
    public static function negative($nbr)
    {
        if (!is_int($nbr))
        {
            throw new \Exception("params are not right, they must be numbers");
        } elseif ($nbr <= 0)
        {
            return true;
        } else {
            return false;
        }
    }
    /**
     * @param $nbr
     * @return string
     * @throws \Exception
     */
    public static function positive($nbr)
    {
        if (!is_int($nbr))
        {
            throw new \Exception("params are not right, they must be numbers");
        } elseif ($nbr >= 0)
        {
            return true;
        } else {
            return false;
        }
    }
}