<?php
include_once "Comparable.php";
include_once "Circle.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($otherCircle)
    {
        if ($this->getRadius() > $otherCircle->getRadius()) {
            return 1;
        } elseif ($this->getRadius() < $otherCircle->getRadius()) {
            return -1;
        } else {
            return 0;
        }
    }
}
