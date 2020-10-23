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
        echo  "da kiem tra";
        return $this->front;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
         $this->font=$this->front->next;
        return $removedValue;

    }
}