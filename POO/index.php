<?php

class Car
{
    //attribute
    protected $name;
    protected $horse;
    protected $acceleration;

    public $motor = "Normal";

    function __construct($name,$horse,$acc){
        $this->name = $name;
        $this->horse = $horse;
        $this->acceleration = $acc;
    }
    
    //methods
    public function acceleration(){

        $this->acceleration += 1;
    }

    //getrs
    public function getAcceleration(){
        return $this->acceleration;
    }
    //seters
    public function setAcceleration($val){

        if(filter_var($val,FILTER_VALIDATE_INT) && $val > 0) $this->acceleration = $val;
    }

    public function getName(){
        return $this->name;
    }

    public function Message(){
        return "The Car Name IS : ".$this->name;
    }


    public function __destruct(){
        echo "<br> $this->name BYE BYE <br/>";
    }

    public function __clone(){
        echo "<br> $this->name clone";
    }
}

 
$carOne = new Car("Audi WEDR 1",60,122);
$carTwo = new Car("Audi WEDR 2",60,122);

$carThree = clone $carOne;

echo $carThree->name;

?>