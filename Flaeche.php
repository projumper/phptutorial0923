<?php

class GeoFigur
{
    public $height;
    public $width;
    public $pi = 3.14;
    public $scope;


    public function calculateExpanse()
    {   

    }

}

class Circle extends GeoFigur
{
    public $radius;

    public function calculateExpanse()
    {
        return $A = 2 * $this->pi * $this->radius;
    }
}

class Rectangle extends GeoFigur
{

    public function calculateExpanse()
    {
        $A = $this->width * $this->height;
        return $A;
    }
}