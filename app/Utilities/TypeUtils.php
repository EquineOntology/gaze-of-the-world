<?php


namespace CFratta\GazeOfTheWorld\Utilities;


class TypeUtils
{
    /**
     * Explode a string on multiple delimiters.
     *
     * @param  $delimiters
     * @param  $string
     * @return array
     */
    public static function multiexplode($delimiters, $string)
    {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);

        return $launch;
    }


    /**
     * Sum country mentions in the two provided arrays.
     *
     * @param  $first
     * @param  $second
     * @return mixed
     */
    public static function sumMentions($first, $second)
    {
        $result = $first;
        $keys = array_keys($second);
        foreach ($keys as $key) {
            if (isset($result[$key])) {
                $result[$key] = $first[$key] + $second[$key];
            } else {
                $result[$key] = $second[$key];
            }
        }

        return $result;
    }

}