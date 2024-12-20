<?php

/*
- Comments  
- Echo  
- var_dump()  
- Variabel  
- All Type Data  
- Casting Data  
- Constant Data  
- Function  
- Parameter/ Arguments  
- Class  
- Object  
- Property  
- Method  
- Construct  
- Destruct  
- Inheritance with Class  
- 3 Types of Visibility/ Access Modifier  
- Abstract Keyword  
- Interface Keyword  
- Inheritance with Interface  
- Differences Between Abstract and Interface
*/

//ini comment
#ini comment
/*nhghgbnmnk
jhjbjbjbjbj
ini juga comment*/

echo "Hello Salman";
echo "<br>";
echo ("Ini Salman");
echo "</br>";
echo 123;
echo "<hr>";

$a="Salman";
$b = [1,"Slebew",3.9,true,];
echo $a;
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<hr>";

$s= "pondok";
$se = "programmer";
echo "Saya adalah anak " . $s . "saya sedang menekuni pelajaran bidang " . $se; 
echo "<hr>";
$string = "123";
var_dump($string);
$int= (int)$string;
echo "<br>";
var_dump ($int);
echo "<hr>";

define("ANIMAL", "Cat");
echo ANIMAL;
echo "<br>";
const FLOWER = "Rose";
echo FLOWER;
echo "<br>";

class Makhluk {
  const ANIMAL = "Dog";
}
echo Makhluk::ANIMAL;
echo "<hr>";

function add ($x, $y) {
    $z = $x + $y;
    return $z;
}
echo add(10, 40);
echo "<br>";
echo add(50, -20);
echo "<br>";

function tinggi ($minHeight = 50) {
    echo "Tinggi Badan santri terdaftar = " . $minHeight . "cm";
}
echo tinggi(200);
echo "<br>";
echo tinggi();
echo "<hr>";

//////
class Pondok {
  public $santri = "nama",
         $musyrif = "nama",
         $jurusan = "kelas",
         $tahun_masuk = 0;

         public function __construct ($santri, $musyrif, $jurusan, $tahun_masuk) {
            $this->santri = $santri;
            $this->musyrif = $musyrif;
            $this->jurusan = $jurusan;
            $this->tahun_masuk = $tahun_masuk;
        }

        public function __destruct() {
          echo "<br>";
           echo "Inilah Daftar Santri angkatan 20";
        }
  public function pembelajaran(){
    return "$this->santri, $this->tahun_masuk";
  }

  protected function kepondokan(){
    return "$this->musyrif, $this->tahun_masuk";
  }

    private function nilai(){
      return "$this->santri, $this->jurusan";
    }

    public function hasil() {
      return $this->nilai();
    }
}

class PondokIT extends Pondok {
    public function penilaian() {
      return $this->kepondokan();
    }
    
    public function setName() {
      echo "Selamat mengerjakan ujian";
    }
}

$pondokit = new PondokIT("Salman", "Mas Syafiq", "Programmer", 2020);
echo $pondokit->pembelajaran();
echo "<br>";
echo $pondokit->penilaian();
echo"<br>";
$pondokit->setName();
echo "<br>";
echo "<br>";
$pondok = new Pondok("Salman", "Mas Syafiq", "Programmer", 2020);
echo $pondok->hasil();



