<?php
/*
|----------------------------------------------------
|注册树模式
|----------------------------------------------------
|
|
*/

namespace DesignPattern;


class Register
{
    protected static $objects;

    static public function set($alias,$obj){
        self::$objects[$alias]=$obj;
    }

    static public function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
    static public function get($name)
    {
        return self::$objects[$name];
    }

}