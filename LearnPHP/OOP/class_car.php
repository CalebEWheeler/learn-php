<?php 

  class Car {

    function MoveWheels() {
      echo "Wheels move...";
    }
  }

  if(class_exists("Car")) {
    echo "The Car object exists!";
  } else {
    echo "no...";
  }

  echo "<br>";

  if(method_exists("Car", "MoveWheels")) {
    echo "MoveWheels() exists.";
  } else {
    echo "The method doesn't exist...";
  }
?>
