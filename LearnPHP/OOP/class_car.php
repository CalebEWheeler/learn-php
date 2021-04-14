<?php 

  class Car {

    function MoveWheels() {
      echo "Wheels move...";
    }
  }

  // if(class_exists("Car")) {
  //   echo "The Car object exists!";
  // } else {
  //   echo "no...";
  // }

  // echo "<br>";

  // if(method_exists("Car", "MoveWheels")) {
  //   echo "MoveWheels() exists.";
  // } else {
  //   echo "The method doesn't exist...";
  // }

  //Instantiate two new car objects
  $golf = new Car(); 
  $jetta = new Car();

  //how to call an objects methods in PHP
  $golf->MoveWheels();
  echo "<br>";
  $jetta->MoveWheels();
?>
