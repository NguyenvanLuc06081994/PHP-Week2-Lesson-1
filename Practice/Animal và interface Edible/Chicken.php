<?php
include_once "Animal.php";
include_once "InterFace/Edible.php";
class Chicken extends Animal implements Edible {
    public function makeSound(): string
    {
        return "chiken : cuccu cuccu";
    }
    public function howToEat(): string
    {
        return "chicken could be fried";
    }
}