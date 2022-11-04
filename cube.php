<?php


class Cube
{
    public function __construct(public float $rayon)
    {
    }

    public function getVolume(): float
    {
        return 2 * pi() * $this->rayon;
    }

    public function getArea(): float
    {
        return pi() * $this->rayon * $this->rayon;
    }
}