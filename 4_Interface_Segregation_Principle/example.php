<?php

interface Flyable
{
    public function fly();
}

interface Swimable
{
    public function swim();
}

interface Walkable
{
    public function walk();
}

class Airplane implements Flyable
{
    public function fly() 
    {
        # code ...
    }
}

class Fish implements Swimable
{
    public function swim()
    {
        # code...
    }
}

class Person implements Walkable
{
    public function walk()
    {
        # code...
    }
}