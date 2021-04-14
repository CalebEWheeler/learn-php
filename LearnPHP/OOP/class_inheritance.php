<?php 

  class Car {
    var $wheels = 4;
    var $doors = 4;
    var $engine = "inline-6";
    var $fuel = "petrol";
    var $color = "red";
  }

  class VW extends Car {
    //creating new properties not in Car to individualize this object from Car.
    var $make = "Volkswagen";
    var $model = "Golf";
    //overriding Car properties to individualize this object
    var $engine = "inline-4";
    var $fuel = "diesel";
    var $color = "dark-gray";
  }

  class Jeep extends Car {
    var $make = "Jeep";
    var $model = "Wrangler";
    var $doors = 2;
  }

  $VW = new VW();
  $Jeep = new Jeep();
  echo $VW->make." : ".$VW->model." : ".$VW->engine." : ".$VW->fuel." : ".$VW->color." : Wheels = ".$VW->wheels." : Doors = ".$VW->doors;
  echo "<br>";
  echo $Jeep->make." : ".$Jeep->model." : ".$Jeep->engine." : ".$Jeep->fuel." : ".$Jeep->color." : Wheels = ".$Jeep->wheels." : Doors = ".$Jeep->doors;
  
?>