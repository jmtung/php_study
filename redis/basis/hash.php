<?php
$redis=new Redis();
$redis->connect('127.0.0.1',6379);

$redis->hSet('hash1', 'name', 'jm');
$redis->hSet('hash1', 'age', 20);
$redis->hSet('hash1', 'sex', 1);

var_dump($redis->hMGet('hash1', ['name','age','sex']));
