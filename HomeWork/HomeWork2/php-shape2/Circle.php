<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */
include_once('Shape.php');
include_once("Resizeable1.php");

class Circle extends Shape implements Resizeable1
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function resizeN($number)
    {
        return $this->calculateArea()* (1+$number/100);
    }
}