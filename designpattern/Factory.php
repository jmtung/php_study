<?php
namespace DesignPattern;

use DesignPattern\Lib\Database;

class Factory
{

    /**
     * 实例化数据库类统一在该方法实现 解耦 代码复用
     *
     */
    public static function createDB()
    {
        $db = Database::getInstance();
        Register::set('db', $db);
        return $db;
    }

    public function eco()
    {
        echo 'a';
    }
}