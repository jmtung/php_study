<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-8-28
 * Time: 下午8:06
 * Describe:
 */

namespace DesignPattern;


use DesignPattern\Interfaces\UserStrategy;

class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "2017新款女装";
    }

    function showCategory()
    {
        echo "女装";
    }

}