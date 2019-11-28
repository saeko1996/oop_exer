<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body bgcolor=" #ff3333   ">

<center>
<?php
    class vehicle{

    	//declaring member variable here
    	var $type;
    	var $fuel;
    	var $capacity;
        var $speed;


    	//declaring member functions

    	function setType($type){
    		$this->type = $type;

    	}

    	function getType(){
    		echo "Vehicle Type: $this->type.<br>";

    	}
        function setFuel($fuel){
            $this->fuel = $fuel;

        }
        function getFuel(){
            echo "Fuel: $this->fuel.<br>";

        }
        function setCapacity($capacity){
            $this->capacity = $capacity;

        }
        function getCapacity(){
            echo "Capacity: $this->capacity.<br>";
        }
    	function setSpeed($speed){
            $this->speed = $speed;
        
        }
        function getSpeed(){
            echo "Speed: $this->speed. KM/HR<br>";
        }
    }

    $type = new vehicle();
    $type->setType("Jeepney");
    $type->getType();

    $type = new vehicle();
    $type->setFuel("Diesel");
    $type->getFuel();

    $type = new vehicle();
    $type->setCapacity(12);
    $type->getCapacity();

    $type = new vehicle();
    $type->setSpeed(157);
    $type->getSpeed();
      
    $type = new vehicle();
    $type->setType("Lamborghini");
    $type->getType();

    $type = new vehicle();
    $type->setFuel("Gasoline");
    $type->getFuel();

    $type = new vehicle();
    $type->setCapacity(30);
    $type->getCapacity();

    $type = new vehicle();
    $type->setSpeed(230);
    $type->getSpeed();
      
    
    
   
    ?></center>
   </body>
</html>