<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 25/11/2014
 * Time: 14:00
*/

namespace WEB2\Validator;


class ArrayValidator
{
    /**
     * @param array $array
     * @return bool
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception('Params they must be array');

        return (empty($array)) ? true : false;
    }

    /**
     * @param $array
     * @param int $nbr
     * @return bool
     * @throws \Exception
     */
    public static function equalArray($array, $nbr)
    {
        if(!is_array($array) || !is_int($nbr))
            throw new \Exception('Must be array or integer');

        return (count($array) == $nbr) ? true : false;
    }

    /**
     * @param array $array
     * @param int $nbr
     * @return bool
     * @throws \Exception
     */
    public static function superiorArray($array, $nbr)
    {
        if(!is_array($array) || !is_int($nbr))
            throw new \Exception('Must be array or integer');

        return (count($array) > $nbr) ? true : false;
    }

    /**
     * @param array $array
     * @param int $nbr
     * @return bool
     * @throws \Exception
     */
    public static function superiorEqualArray($array, $nbr)
    {
        if(!is_array($array) || !is_int($nbr))
            throw new \Exception('Must be array or integer');

        return (count($array) >= $nbr) ? true : false;
    }

    /**
     * @param  array $array
     * @param int $nbr
     * @return bool
     * @throws \Exception
     */
    public static function inferiorArray($array, $nbr)
    {
        if(!is_array($array) || !is_int($nbr))
            throw new \Exception('Must be array or integer');

        return (count($array) < $nbr) ? true : false;
    }

    /**
     * @param array $array
     * @param int $nbr
     * @return bool
     * @throws \Exception
     */
    public static function inferiorEqualArray($array, $nbr)
    {
        if(!is_array($array) || !is_int($nbr))
            throw new \Exception('Must be array or integer');

        return (count($array) <= $nbr) ? true : false;
    }

    /**
     * @param array $array
     * @param int $min
     * @param int $max
     * @return bool
     * @throws \Exception
     */
    public static function betweenArray($array, $min, $max)
    {
        if(!is_array($array))
            throw new \Exception('Must be array or integer');

        return (count($array) > $min && count($array) < $max) ? true : false;
    }

    /**
     * @param $key
     * @param array $array
     * @internal param $array
     * @return bool
     */
    public static function keyArray($key, $array)
    {
        return (array_key_exists($key, $array)) ? true : false;
    }

    /**
     * @param string $value
     * @param  array $array
     * @return bool
     */
    public static function valueExists($value, $array)
    {
        return (in_array($value, $array)) ? true : false;
    }
} 