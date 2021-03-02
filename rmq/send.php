<?php

require_once __DIR__ . '/../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('25.14.30.215', 5672, 'admin', 'admin');
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

$msg = new AMQPMessage('hello from apache');
$channel->basic_publish($msg, '', 'hello');

echo " Sent 'Hello World!'\n";

$channel->close();
$connection->close();
?>
