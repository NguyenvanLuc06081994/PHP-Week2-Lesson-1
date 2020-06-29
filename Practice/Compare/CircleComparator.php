<?php
include_once ("Circle.php");
include_once ("Comparator.php");

class CircleComparator implements Comparator{

    public function Compare($circleOne, $circleTwo)
    {
        if ($circleOne->getRadius() > $circleTwo->getRadius()){
            return 1;
        }elseif ($circleOne->getRadius() < $circleTwo->getRadius()){
            return -1;
        }else{
            return 0;
        }
    }
}