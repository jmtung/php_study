<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-8-21
 * Time: 下午11:54
 * Describe:
 */

namespace Syntax\Statics;


class Statics
{
    static public $name="妹子";

    /**
     * @return string
     */
    public static function getName()
    {
        return self::$name;
    }

    /**
     * @param string $name
     */
    public static function setName($name)
    {
        self::$name = $name;
    }


}