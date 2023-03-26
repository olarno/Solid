<?php

abstract class Shape 
{
    abstract public function getArea();
}

class Square extends Shape 
{
    public function __construct(private int $length)
    {   
    }

    public function getArea()   
    {
        return pow($this->length, 2);
    }
}

class Rectangle extends Shape 
{
    public function __construct(private int $length, private $width)
    {
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }
}

function testShape(Shape $shape)
{
    return $shape->getArea();
}