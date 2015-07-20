<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 02.06.15
 * Time: 23:04
 */

$entryData = array(
    'notify' => 'event',
    'message' => 'some event',
    'when' => time(),
);

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'notify pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));