<?php

interface Shape
{
    public function draw();
}

class Rectangle implements Shape{
    public $x;
    public $y;
    public $w;
    public $h;


    public function draw()
    {
        echo "Drawing a rectangle";
    }
}

class Circle implements Shape{
    public $r;

    public function draw()
    {
        echo "Drawing a circle";
    }
}

class ShapeFactory{
    public function create($type){
        if($type == "Rectangle"){
            return new Rectangle();
        }
        if($type == "Circle"){
            return new Circle();
        }
    }
}

$factory = new ShapeFactory();
$rect = $factory->create("Rectangle");
$rect->draw();