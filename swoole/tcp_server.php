<?php

$server = new swoole_server('127.0.0.1', 8080);

$server->on('connect', function ($serv, $fd, $from_id) {
    echo 'connected ';
    $serv->send($fd, "hello,I'm TCP Server\n");
});

$server->on('receive', function (swoole_server $serv, $fd, $from_id, $data) {
    echo "received: $data ";
    $serv->send($fd, "I have receive you message\n");
});

$server->on('close', function ($serv, $fd, $from_id) {
    echo 'closed ';
});

$server->start();

