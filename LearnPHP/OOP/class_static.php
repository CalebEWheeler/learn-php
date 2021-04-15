<?php 

  class Car {

    static $wheels = 4;
    public $doors = 4;

    static function NumberOfWheels() { 
      //when we have a static method we can no longer refer to the Car object as $this
      // $this->wheels = 10;

      //utilize the '::' in place of '->' 
      Car::$wheels = 10;
    }
  }

  $bmw = new Car();

  //cannot refer to wheels like this anymore because $wheels is a static property
  //echo $bmw->wheels;

  //The syntax to refer to a static property is utilizing '::' in place of the '->'
  echo $bmw::$wheels;

  // If we want to call a method to change the value of a property, we need to first call the object method like so 'OBJECT::METHOD' then echo the value of the property
  $bmw::NumberOfWheels();
  echo "<br>".$bmw::$wheels;

  //as you can see, regardless of defining a specific instance of the class Car and changing the instances $wheels value, when we call Car::$wheels you will see that the method NumberOfWheels() overrides the $wheels property value of the class Car...
  echo "<br>".Car::$wheels;
?>