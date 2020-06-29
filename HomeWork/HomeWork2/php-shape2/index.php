<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area before rise: ' . $circle->calculateArea() . '<br />';
echo 'Circle area after rise: ' . $circle->resizeN(rand(0,100)) . '<br />';
//echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area before rise: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder area after rise: ' . $cylinder->resizeN(rand(0,100)) . '<br />';

//echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area before rise: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle area after rise: ' . $rectangle->resizeN(rand(0,100)) . '<br />';

//echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area before rise: ' . $square->calculateArea() . '<br />';
echo 'Rectangle area after rise: ' . $square->resizeN(rand(0,100)) . '<br />';

//echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
