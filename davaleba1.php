<?php

class Fruit {
    protected $color;
    protected $weight;
  
    public function __construct( $color , $weight )
    {    
        $this->color=$color;
        $this->weight=$weight;
        
    }
}
  class Mango extends Fruit{
    
    function method(){
        return array(
          
          "color"=>$this->color,
          
          "weight"=>$this->weight );
    }
}

$Mango = new Mango("yellow",7);
var_dump($Mango->method());
