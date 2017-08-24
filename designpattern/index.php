<?php
require_once "../vendor/autoload.php";

/*--------------------------工厂模式--------------------------*/

$db=\DesignPattern\Factory::createDB();
$db->where()->selectAll();

/*--------------------------单例模式--------------------------*/
$db=\DesignPattern\Lib\Database::getInstance();
var_dump($db);

/*--------------------------适配器模式--------------------------*/
$db=new \DesignPattern\Lib\MySQL();
//$db=new \DesignPattern\Lib\MySQLi();
//$db=new \DesignPattern\Lib\PDO();
$db->connect('127.0.0.1', 'jm', 'ming0147', 'llaravel');
var_dump($db->query("show databases"));
$db->close();