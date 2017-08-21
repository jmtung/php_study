<?php
$redis=new Redis();
$redis->connect('127.0.0.1',6379);

$redis->sAdd('set1', 'a');
$redis->sAdd('set1', 'b');
$redis->sAdd('set1', 'c');
$redis->sAdd('set1', 'c');

var_dump($redis->sCard('set1'));

var_dump($redis->sMembers('set1'));