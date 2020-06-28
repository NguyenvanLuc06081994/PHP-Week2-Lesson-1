<?php

include_once "Resizeable.php";

class Square implements Resizeable
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
        $this->name = $name;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width ** 2;
    }

    public function resize($number)
    {
        return $this->getArea() * (1 + $number / 100);
    }

}
