<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:15
 */
include_once('Circle.php');
include_once("Resizeable1.php");

class Cylinder extends Circle implements Resizeable1
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
    public function resizeN($number)
    {
        return $this->calculateArea()* (1+$number/100);
    }
}