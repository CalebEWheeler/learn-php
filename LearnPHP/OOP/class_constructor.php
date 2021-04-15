<?php 

  class Car {
    //Three access modifiers in PHP; public, protected, private
    
    //  • public (default) is visible anywhere; 
    //  • protected is visible in the class or any other class that derives from it i.e subclasses...; 
    //  • private is only visible inside the class
    protected $id;
    protected $make;
    protected $model;
    protected $vin;
    protected $wheels;
    protected $doors;
    //var will just be read as a public class, it's better to be semantic!
    var $engine;

    //In PHP you cannot utilize method overloading, therefore I cannot create different constructors. No Default, create or read constructors are available like in Java...

    //constructor 
    function __constructor($id, $make, $model, $vin, $wheels, $doors, $engine) {
      $this->id = $id;
      $this->make = $make;
      $this->model = $model;
      $this->vin = $vin;
      $this->wheels = $wheels;
      $this->doors = $doors;
      $this->engine = $engine;
    }

    //getters 
    public function get_id() { return $this->name; }
    public function get_make() { return $this->make; }
    public function get_model() { return $this->model; }
    public function get_vin() { return $this->vin; }
    public function get_wheels() { return $this->wheels; }
    public function get_doors() { return $this->doors; } 
    public function get_engine() { return $this->engine; }

    //setters
    public function set_id($id) { $this->id=$id; }
    public function set_make($make) { $this->make = $make; }
    public function set_model($model) { $this->model = $model; }
    public function set_vin($vin) { $this->vin = $vin; }
    public function set_wheels($wheels) { $this->wheels = $wheels; }
    public function set_doors($doors) { $this->doors = $doors; }
    public function set_engine($engine) { $this->engine = $engine; }

  }

  $car = new Car();
  $car->set_id(1);
  $car->set_make('Volkswagen');
  $car->set_model('Golf');
  $car->set_vin('#someVinNumber');
  $car->set_wheels(4);
  $car->set_doors(4);
  $car->set_engine('inline-4');

  $make = $car->get_make();
  $model = $car->get_model();
  $vin = $car->get_vin();
  $wheels = $car->get_wheels();
  $doors = $car->get_doors();
  $engine = $car->get_engine();

  echo $make."<br>".$model."<br>".$vin."<br>".$wheels."<br>".$doors."<br>".$engine;
?>