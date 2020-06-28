<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
include_once "Resizeable.php";

$geometry[0] = new Circle("hinhtron",100);
$geometry[1] = new Rectangle('hinh chu nhat', 10, 20);
$geometry[2] = new Square('hinh vuong', 30);
foreach ($geometry as $value) {
    echo $value->getName() . " co dien tich truoc khi tang la: " . $value->getArea() . "<br>";
    echo $value->getName() . " co dien tich sau khi tang la: " . $value->resize(rand(0,100)) . "<br>";
}