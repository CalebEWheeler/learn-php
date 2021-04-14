<?php 

  class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels() {
      //I can redefine a property in a method and refer to the object with $this...
      $this->wheels = 10;
    }

    function CreateDoors() {
      $this->doors = 6;
    }
  }

  $jetta = new Car();
  $truck = new Car();
  //I can reassign object properties outside the class...
  // $jetta->wheels = 8;
  //or I can change a properties value in a class method...
  echo $jetta->MoveWheels();
  echo "This jetta has ".$jetta->wheels." wheels<br>";
  echo "This jetta has ".$jetta->hood." hood<br>";
  echo "This jetta has ".$jetta->engine." engine<br>";
  echo "This jetta has ".$jetta->doors." doors<br>";
  
  //playing with making a new Car object and using methods to manipulate the properties values.
  echo $truck->wheels = 10 . "<br>";
  $truck->CreateDoors();
  echo $truck->doors;
?>