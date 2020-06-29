<?php

class Circle
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }
}