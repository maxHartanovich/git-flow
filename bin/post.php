<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 02.06.15
 * Time: 22:31
 */

$entryData = array(
    'category' => 'kittensCategory',
    'title' => 'title',
    'article' => 'article',
    'when' => time(),
);



// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'category pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));