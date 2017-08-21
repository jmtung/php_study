<?php
$redis=new Redis();
$redis->connect('127.0.0.1',6379);

$redis->set('string1', 'jm');
var_dump($redis->get('string1'));
//jm

$redis->set('string1', 1870);
$redis->incr('string1',2);
var_dump($redis->get('string1'));
//1872
