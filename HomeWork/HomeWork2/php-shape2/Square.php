<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once('Rectangle.php');
include_once("Resizeable1.php");

class Square extends Rectangle implements Resizeable1
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resizeN($number)
    {
        return $this->calculateArea()* (1+$number/100);
    }
}