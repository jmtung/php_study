<?php
//接收用户订单信息并写入队列

require_once './Class/DB.php';

$db=new DB('localhost',3306,'jm','ming0147','order_queue');