<?php
include_once "ComparableCircle.php";
$circle1 = new ComparableCircle("hinh 1", 50);
$circle2 = new ComparableCircle("hinh 2", 20);
$circle3 = new ComparableCircle("hinh 3", 30);
$circle[0] = $circle1->getRadius();
$circle[1] = $circle2->getRadius();
$circle[2] = $circle3->getRadius();
sort($circle);
echo "<pre>";
var_dump($circle);
echo "</pre>";