<?php
include_once "Colorable.php";

class Square implements Colorable
{
    protected $name;
    protected $width;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function __construct($name, $width)
    {
        $this->width = $width;
        $this->name = $name;
    }

    public function getArea()
    {
        return $this->width ** 2;
    }

    public function howToColor()
    {
       return "$this->name ". "Color all four side !";
    }

}