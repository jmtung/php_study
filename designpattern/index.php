<?php
require_once "../vendor/autoload.php";

/*--------------------------工厂模式--------------------------*/

$db=\DesignPattern\Factory::createDB();
$db->where()->selectAll();

/*--------------------------单例模式--------------------------*/
$db=\DesignPattern\Lib\Database::getInstance();
var_dump($db);