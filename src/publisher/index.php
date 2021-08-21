<?php

use PhpAmqpLib\Message\AMQPMessage;

[$channel, $connection] = require_once __DIR__ . '/../setup.php';


$msg = new AMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();