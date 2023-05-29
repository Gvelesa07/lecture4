<?php

class Car {

    private $color;
    public function setColor(string $color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
}

$manqana=new Car();
$manqana->setColor("Yellow");
echo $manqana->getColor();

