<?php
abstract class Serangga {
public $nama,
       $makanan,
       $habitat;

       public function __construct ($nama = "none", $makanan= "none", $habitat="not found") {
        $this->nama = $nama;
        $this->makanan = $makanan;
        $this->habitat = $habitat;
       }
       
       abstract protected function melata() : string;
}

class Insect extends Seranggay {

    public function melata() : string {
        return "Saya meneliti seekor serangga yang tinggal di " . $this->habitat . " dan suka memakan "
        . $this->makanan . " yaitu hewan " . $this->nama;
    }
}

$lebah = new Insect("Lebah", "Nektar", "Hutan" );
echo $lebah->melata();