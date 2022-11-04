<?php

require_once 'shape.php';

class Square extends shape
{
    public function __construct(public float $length)
    {
        parent::__construct($this->length, $this->length);
    }
}