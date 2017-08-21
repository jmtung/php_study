<?php
namespace DesignPattern;

use DesignPattern\Lib\Database;

class Factory
{
    static function createDB()
    {
        $db = new Database();
        return $db;
    }

    public function eco()
    {
        echo 'a';
    }
}