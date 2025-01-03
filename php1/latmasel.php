<?php

//variabel (simbol/syntax yang digunakan untuk menampung nilai)
// $tes1 = "salman"; //isi di dalamnya adalah value
// $tes2 = 17;
// " " ; adalah tipe data string
// echo $tes1;
// echo "<br>";
// echo "Umur saya adalah " . $tes2 . "<br>";
// var_dump($tes2); // untuk mengetahui tipe data secara detail

// var_dump(5);
// var_dump("John");
// var_dump(3.14);
// var_dump(true);
// var_dump([2, 3, 56]);
// var_dump(NULL);

//function
// function perkenalan ($nama) {
//    // echo "Halo, Nama saya Salman";
//     echo "<br>";
//     echo "Halo, Nama saya $nama";


// }

// function perkalian ($angka1 = 100 , $angka2 = 100) {
//     $result = $angka1 * $angka2;
//  echo " Hasilnya adalah $result ";
    

// }

// perkalian(12,12);
// perkenalan("Slebew");
//var dump adalah function bawaan php, ditandai dengan ()

//GLOBAL VARIABEL SCOPE (variabel yang di deklarasi di luar manipulasi syntax)
// $variabel1 = "INI SCOPE GLOBAL <br>";
//LOCAL VARIABEL SCOPE (variabel yang punya lingkungan sendiri)
// function tesq($angka1){
// $variabel2 = "INI SCOPE LOKAL".$angka1;
// echo $variabel2;
// // global $variabel1;
// // $v = "INI FUNCTION" . $variabel1;
// // return $v;
// }
// //function merupakan bagian dari lokal

// // echo $variabel1;
// tesq($angka1);
// echo tesq();
// $bb = tesq();
// var_dump($bb);




// function fungsi1() {
// $nama = "Salman";
// return $nama;
// }

// function fungsi2() {
//   $nama = "Salman";
//   echo $nama;
//   }

//   // fungsi1();
//   // fungsi2();

//   define("PRIMARY", "#ffffff");
//   const PRIMARY2= "Constant2";

//   echo PRIMARY;
// echo PRIMARY2;
// echo __DIR__;

// class Animal {
//   //Properties
//   public $name = "Anoa";
//   public $name2 = "Wolf";
//   public $color = "Black";

//   //methods to
//   public function habitat($name) {
//     $this->$name = "Halo Nama hewan Saya" . $name;
//   }

// }

// class kalkulator {

//   public $resultTambah;
//   public $resultKurang;
//   public $resultKali;
//   public $resultBagi;


//   public function tambah($a, $b) {
//     $this->resultTambah = $a + $b;
//     return $this->resultTambah;
//   }



// }
// // $eksekusi1 = new kalkulator();
// // $eksekusi1->tambah(5,5);

// // echo $eksekusi1->resultTambah();
// // echo "\n";

// class Pesantren {
//   public $asrama20 = "Asrama 20 <br>";
//   protected $asrama19= "Asrama 19<br>";
//   private $asrama18 = "Asrama 18<br>";

//   function get_asrama18() {
//     return $this->asrama18;
//   }
// }
// $salman = new Pesantren();
// echo $salman->asrama20;
// echo $salman->get_asrama18();

// class pondokITpro extends Pesantren{
//   function get_asrama19() {
//     return $this->asrama19;
//   }
// }
// $dani = new pondokITpro();
// echo $dani->get_asrama19(); 

// class rumahIt {
// const LEAVING_MESSAGE = "Terima Kasih telah mengunjungi website kami";

// }

// abstract class ParentClass {
//   // Abstract method with an argument
//   abstract protected function fixNamee($name) : string;
// }

//  class ChildClass extends ParentClass{
//   public function fixN ($name) : string{
//     echo 123;
//   }

// }

// interface Animal {
//   public function makeSound();
// }
//  class Cat implements Animal {
//   public function makeSound() {
//     echo "Meow";
//   }
// }
// $binatang = new Cat();
// $binatang->makeSound();


$n = 10;
for ($i = 1; $i <= $n; $i++) {
  for($o =$i; $o <= $n; $o++) {
    echo " ";
  }
  for ($p = 1; $p <= (2 * $i - 1); $p++) {
    echo "*";
  }
  
  echo "\n";
}

$m = 8;
$n = 5;
for ($i = 1; $i <= $n; $i++) {
  for($k =1; $k <= $m; $k++) {
    echo " ";
  }
  for($o =1; $o <= $n; $o++) {
    echo "*";
  }
  echo "\n";
}
?>