<?php
 interface Animal {
    public function eat() : string;
 }

 interface Plants {

  public function tumbuh() : string;
 }

 class Mamalia {

  public $name,
        $habitat;
  public function __construct ($name = "none", $habitat = "not found") {
    $this->name = $name;
    $this->habitat=$habitat;
  }

  public function deskripsi() {
    return "The " . $this->name . " alive in " . $this->habitat;
  }
 }

 class Cat extends Mamalia implements Animal, Plants {
  public function eat() : string {
    return "And the animal is mine";
  }

  public function tumbuh() : string {
    return "slebew";
  }
 }

 $cat = new Cat("Cat", "Home");
 echo $cat->deskripsi();
 echo "<br>";
 echo $cat->eat();
