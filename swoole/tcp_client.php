<?php

$client=new swoole_client(SWOOLE_SOCK_TCP,SWOOLE_SOCK_ASYNC);

$client->on('connect', function ($cli){
   echo 'connected';
});

$client->on('error', function ($cli){
    echo 'connect fail ';
});

$client->on('close', function ($cli){
    echo 'closed ';
});

$client->on('receive', function (swoole_client $cli,$data){
    echo "receive: $data ";
    sleep(1);
    $cli->send("hello,I'm TCP client\n");
//    $cli->close();
});

$client->connect('127.0.0.1', 8080);