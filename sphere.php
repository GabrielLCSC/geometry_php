<?php


class Sphere
{
    public function __construct(public float $rayon)
    {
    }

    public function getVolume(): float
    {
        return 4 / 3 * pi() * $this->rayon **3;
    }

    public function getArea(): float
    {
        return 4 * pi() * $this->rayon * $this->rayon;
    }
}