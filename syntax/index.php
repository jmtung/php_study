<?php
require_once "../vendor/autoload.php";

/*--------------------------静态属性测试--------------------------*/
$firObj=new \Syntax\Statics\Statics();
$secObj=new \Syntax\Statics\Statics();
echo $firObj->getName()."\n";
echo $secObj->getName()."\n";
$firObj->setName("汉子");
echo $firObj->getName()."\n";
echo $secObj->getName()."\n";

