<?php
include_once 'Node.php';

class Queue
{
    private $front;
    private $back;

    public function __construct($back = null, $front = null)
    {
        $this->front = $front;
        $this->back = $back;
    }

    public function isEmpty()
    {
        return $this->front==null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
         $this->front=$this->front->next;
        return $removedValue;

    }
}