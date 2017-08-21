<?php
$redis=new Redis();
$redis->connect('127.0.0.1',6379);

$redis->zAdd('zSet', 100, 'jm');
$redis->zAdd('zSet', 99, 'tung');
$redis->zAdd('zSet', 93, 'laowang');

var_dump($redis->zRange('zSet', 0, -1));
var_dump($redis->zRevRange('zSet', 0, -1));
