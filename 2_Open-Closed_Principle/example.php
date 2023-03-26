<?php
interface Shape
{
    public function getArea();
}


class Circle implements Shape
{
    public function __construct(private int $radius)
    {
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape
{
    public function __construct(private int $width, private $height)
    {
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class AreaCalculator
{
    public function __construct(private $shapes)
    {
    }

    public function getTotalArea()
    {
        $total = 0;
        foreach ($this->shapes as $shape) {
            $total += $shape->getArea();
        }
        return $total;
    }
}