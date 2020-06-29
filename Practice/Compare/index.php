<?php
include_once "CircleComparator.php";
$circleOne = new Circle(10);
$circleTwo = new Circle(20);
$compare = new CircleComparator();
echo $compare->Compare($circleOne,$circleTwo);