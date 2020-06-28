<?php
include_once "../Chicken.php";
include_once "../Tiger.php";
include_once "../InterFace/Orange.php";
include_once "../InterFace/Apple.php";

echo ('------Animals <br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
//echo $tiger->makeSound();
//$chicken = new Chicken();
//echo $chicken->makeSound();
foreach ($animals as $value){
    echo $value->makeSound()."<br>";
    if ($value instanceof Chicken){
        echo $value->howToEat()."<br>";
    }
}
echo ('-----Fruit');
echo "<br>";
$fruit[0] = new Apple();
$fruit[1] = new Orange();
foreach ($fruit as $value){
    echo $value->howToEat()."<br>";
}