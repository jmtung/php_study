<?php
$stack=new SplStack();

/*--------------------------栈--------------------------*/
$stack->push('1');
$stack->push('2');

echo $stack->pop()."\n";
echo $stack->pop()."\n";

/*--------------------------队列--------------------------*/
$queue=new SplQueue();
$queue->enqueue('1');
$queue->enqueue('2');

echo $queue->dequeue()."\n";
echo $queue->dequeue()."\n";

/*--------------------------堆--------------------------*/
$heap=new SplMinHeap();
$heap->insert('4');
$heap->insert('1');
$heap->insert('3');
$heap->insert('2');

echo $heap->extract()."\n";
echo $heap->extract()."\n";
echo $heap->extract()."\n";
echo $heap->extract()."\n";

/*--------------------------固定长度数组--------------------------*/
$array=new SplFixedArray(10);
$array[0]=123;
$array[9]=1234;

var_dump($array);