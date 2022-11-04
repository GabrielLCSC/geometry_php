<?php


 class Triangle
{
    public function __construct(public float $side1, public float $side2, public float $side3)
    {
    }

    public function getPerimeter(): float
    {
        return  $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea(): float
    {
        $p2 = $this->getPerimeter() / 2;
        return sqrt($p2 * ($p2 - $this->side1) * ($p2 - $this->side2) * ($p2 - $this->side3));
    }
}