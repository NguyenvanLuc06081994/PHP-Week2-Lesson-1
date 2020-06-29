<?php
include_once "Square.php";
$square = new Square("hinh vuong",10);

$geometry[0] = $square;
foreach ($geometry as $value){
    echo $value->getArea()."<br>";
    if ($value instanceof Square){
      echo  $value->howToColor();
    }
}