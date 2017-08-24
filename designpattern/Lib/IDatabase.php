<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-8-24
 * Time: 下午8:22
 * Describe:
 */

namespace DesignPattern\Lib;



interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}