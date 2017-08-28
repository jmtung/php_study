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

class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "iphone7";
    }

    function showCategory()
    {
        echo "电子产品";
    }

}