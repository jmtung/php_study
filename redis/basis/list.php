<?php
$redis=new Redis();
$redis->connect('127.0.0.1',6379);

$redis->lPush('list1', 'a');
$redis->lPush('list1', 'b');
$redis->lPush('list1', 'c');

var_dump($redis->rPop('list1'));