<?php 

  class Car {

    function MoveWheels() {
      echo "Wheels move...";
    }
  }

  //Instantiate two new car objects
  $golf = new Car(); 
  $jetta = new Car();

  //how to call an objects methods in PHP
  $golf->MoveWheels();
  echo "<br>";
  $jetta->MoveWheels();
?>