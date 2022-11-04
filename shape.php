<?php

abstract class Shape
{
    public function __construct(public float $width, public float $length)
    {
    }

    public function getPerimeter(): float
    {
        return  $this->width * 2 + $this->length * 2;
    }

    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}