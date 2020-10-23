<?php
include_once "Queue.php";
$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->dequeue();
$queue->dequeue();
print_r($queue->isEmpty());
$queue->enqueue(5);
$queue->enqueue(6);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
print_r($queue->isEmpty());
