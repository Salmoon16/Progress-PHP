<?php
echo "<h1> Mari kita Coba </h1>";
echo 91224;
echo "<br>";
echo "Programmer 20<br>";
//Penulisan angka tidak boleh diawali angka 0

$a = ("Salman");
$b = ("Alfarizi");
echo "$a $b <br>";

$latihan = ("LATIHAN");

echo "<h1> $latihan Aritmatika </h1>";
$c = (10);
$d = (40);
echo $c + $d; //Penjumlahan
echo "<hr>";
echo $c - $d; //Pengurangan
echo "<hr>";
echo $c * $d;
echo "<hr>";
echo $d / $c; //Pembagian
echo "<hr>";
echo $d % 3; // Modulo (sisa bagi)
echo "<hr>";
echo $c ** $c;
echo "<hr>";

echo "<h1>$latihan Penggabungan String dan assigntment</h1>";
$ab = ("Salaman");
$ac = ("Perigud");
$ac .= ("<br>");
echo $ab . " " . $ac;

$e = 20;
$e += 5;
$e .= ("<br>");
echo $e;

$e = 20;
$e -= 5;
$e .= ("<br>");
echo $e;

$e = 20;
$e *= 5;
$e .= ("<br>");
echo $e;

$e = 20;
$e /= 5;
$e .= "<hr>";
echo $e;

$name = "Pondok";
$name .= " ";
$name .= "IT";
$name .= " ";
$name .= "Indonesia";
$name .= "<hr>";
echo $name;

echo "<h1>$latihan Perbandingan </h1>";
var_dump(1 == "1");//sama dengn
var_dump(1 > "2");//lebih dari
var_dump(2 < "5");//kecil dari
var_dump(2 <= "5");//kecildari sama dengan
var_dump(2 >= "5");//lebih dari sama dengan
var_dump(2 != "2");//tidak sama dengan
var_dump( 2 === "0");//identitas
var_dump( 1 !== "1");//identitas

$g = 50;
var_dump($g <100 && $g % 2 == 0);//logika kalau & keduanya harus benar
var_dump($g <100 || $g % 1 == 0);//logika kalau | boleh benar salah satu
echo "<hr>";

echo "<h1>$latihan control flow </h1>";
//pengendalian
//pengulangan
//for, while, do..while, foreach (khusus array)
for ( $i = 0; $i < 5; $i++) {
    echo "Hallo world! <br>";
};
// biasanya for pakai variabel i/index($i)
//nilai awal biasanya 0/1 (kalau array biasanya mulai dari 0)
//kondisi terminasi (pengulangannya berapa kali)
//++ agar terus bertambah hingga kondisi bernilai false (sesuai kondsi termminasi)
// $i = 0;
// while( $i < 5) {
//     echo "Salman Alfarizi <br>";
// }

//
// Global Scope
$salman = "Salman";
$alfa =  16;
$santri = "PondokIT";

function slebew() {
    echo "Halo, Nama saya $salman, Umur saya $alfa, dan saya santri $santri <br>";
}
slebew();

echo "Halo, Nama saya $salman, Umur saya $alfa, dan saya santri $santri <br>";

// Local Scope

class Car {


}

$a = new Car();


?>