<?php
//include_once "Animal1.php";
include_once "InterFace/Edible.php";
class Chicken extends Animal1 implements Edible1 {
    public function makeSound(): string
    {
        return "chiken : cuccu cuccu";
    }
    public function howToEat(): string
    {
        return "chicken could be fried";
    }
}