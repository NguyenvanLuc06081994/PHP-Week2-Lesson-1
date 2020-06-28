<?php
include_once "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne',6);
$circleTwo = new ComparableCircle('circleTwo',6);
var_dump($circleOne->compareTo($circleTwo));