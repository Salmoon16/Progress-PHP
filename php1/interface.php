<?php
interface Animalll {

  public function nilai();
}

class Ant implements Animalll {
  public function nilai () {
    return "The Small Animal";
  }
}

class PondokTekno implements Animalll{
  public function nilai () {
    return "Pondok Tekno";
  }
}

$pondokk = new PondokIT ();
echo "<br>";
echo $pondokk->nilai ();