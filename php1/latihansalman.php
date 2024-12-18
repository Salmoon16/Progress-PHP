<?php 
echo "<h1> Bagian 1 (Variabel dan Tipe Data) </h1>";

echo "<h3> 1. Variabel nilai string dan hasilnya</h3>";
$a = "Salman Alfarizi ";
$b = "Salboy";
echo "Halo Nama Saya " . $a . "Kalian boleh memanggil saya dengan " . $b . "<br>";

echo "<h3> 2. Variabel nilai integer lalu ubah nilainya dengan ditambah 5</h3>";

$angka = 15;
echo "Jumlah Santri Pondok IT tahun 2020 adalah ". $angka . "<br>";
$angka +=5;
echo "Jumlah Santri Pondok IT tahun 2021 adalah ". $angka . "<br>";

echo "<h3> 3. Variabel Boolean dengan nilai True</h3>";

$v = true;
var_dump($v);

echo "<h3> 4. Tampilkan Array</h3>";
$array = [1,2,3,4,5];
echo "ini adalah angka awal yaitu " . $array[0] . " dan " . $array[4];
echo "<br>";

echo "<h3> 5. Tampilkan Tipe Data</h3>";
$var = 100;
var_dump($var);

echo "<h3> 6. Variabel float lalu ubah menjadi hasil perkalian 2</h3>";
$k = 1.5;
$l = 2;

$k = (float)$k;
$l = (float)$l;
var_dump($k * $l);
echo "<br>";

echo "<h3> 7. Tampilkan Tipe Data</h3>";
$var = "123";
var_dump($var);

echo "<h1>Bagian 2 (Casting)</h1>";

echo "<h3> 1. Ubah string jadi Integer</h3>";
$well = "123.45";
var_dump($well);
echo "<br>";
$uwek =(int)$well;
var_dump($uwek);

echo "<h3> 2. Ubah Integer jadi float</h3>";
$uih = 55;
var_dump($uih);
echo "<br>";
$huhu = $uih * 0.5;
var_dump($huhu);

echo "<h3> 3. Variabel tipe array diubah menjadi object</h3>";
$ahhay = [
  "nama" => "Salman",
  "umur" => 20,
  "Jurusan" => "Programmer"
];

$objek = (object)$ahhay;
echo $objek->nama;
echo "<br>";
echo $objek->umur;

echo "<h1>Bagian 3 (Function)</h1>";

echo "<h3> 1. Function yang menerima 2 parameter int dan mengembalikan hasil jumlah</h3>";
function uhuy ($r, $s) {
  $result = ($s + $r);
  return $result;
}
echo "Hasil Nilai Jajang adalah " . uhuy(50, 20) . "<br>";

function rekursif ($a){
  if ($a == 0 || $a == 1){
        return 1;
  } else {
       return $a * rekursif ($a - 1);
  }
}
echo rekursif(5);
echo "<h3> 2. Function yang menerima parameter string dan menampilkan hasilnya dengan awalan 'Hello, '</h3>";
function variabel($heel){
  return "Hello, $heel";
}
echo variabel("Salman");
echo "<br>";
echo variabel("Dani");

echo "<h3> 3. Buat Fungsi Rekursif untuk hitung faktorial</h3>";
function faktorial($n) {
  if ($n == 0 || $n == 1) {
    return 2;
  } else {
    return ($n * faktorial($n - 1));
  }
}
echo faktorial(5);
//masih belum terlalu paham

echo "<h3> 4. Fungsi yang menerima 2 parameter dan mengembalikan nilai tertinggi antara keduanya</h3>";
function tinggi($t,$p) {
  if ($t > $p){
  return $t;
  } else {
  return $p;
  }
}
echo tinggi(50, 10);
echo "<br>";
echo tinggi(10, 20);
echo "<br>";

function jangkung($t,$p) {
return max($t,$p);
}
echo jangkung(5, 10);
echo "<br>";

echo "<h3> 5. Fungsi yang menerima  2 angka dan mengembalikan 
hasil pembagian keduanya, pastikan menangani pembagian dengan nol</h3>";
function bagi($siuu ,$bwee) {
  if($siuu == 0) {
    return "Ngapain angka Nol dibagi bro";
  } else {
    return $siuu / $bwee;
  }

}
echo bagi(10, 10);
echo "<br>";
echo bagi(0, 2);
echo "<br>";

echo "<h1>Bagian 4 (Class and Object)</h1>";
echo "<h3>1. Buat class bernama person dengan property 
name and age, buat objek dari class tersebut dan tampilkan property name</h3>";
class DiriBoy {
public $name;
public $age;

function set_nama($name) {
  $this->nama = $name;
}
function get_nama() {
  return $this->nama;
}
}
$ujang = new DiriBoy();
$tarno = new DiriBoy();
$ujang->set_nama("Ujang");
$tarno->set_nama("Tarno");

echo $ujang->get_nama();
echo "<br>";
echo $tarno->get_nama();

echo "<h3>2. Buat class bernama Car dengan method star engine</h3>";
class Car {
  function startEngine() {
    echo "Engine started";
  }
}
$mobil = new Car();
$mobil->startEngine();

echo "<h3> 4. Buat Rectangle</h3>";
class Rectangle {
  public $panjang;
  public $lebar;

  function calculateArea() {
    return $this->panjang * $this->lebar;
  }
}
$poho = new Rectangle();
$poho -> panjang = 10;
$poho -> lebar = 2;
echo "Luas Lapangan Futsal itu kurang lebih " . $poho->calculateArea();
echo "<br>";

echo "<h3> 5. Menampilkan Gaji </h3>";
class Employee{
  public $salary;

  function getSalary(){
    return $this->salary;
  }
}

$employee = new Employee();
$employee->salary = 500000;
echo "Hasil penjualan gorengan selama sebulan adalah Rp. ". $employee->getSalary();
echo "<br>";

echo "<h1> Bagian 5  (Constructor dan Destructor) </h1>";
echo "<h3> 1. Buat class dengan constructor menerima param name dan age</h3>";
class DataSantri {
    public $name;
    public $age;

    public function __construct($name = "Nama", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function tampil (){
     return "$this->name, $this->age";
    }


}

$santri = new DataSantri("Salman", 18);
echo $santri->tampil();

echo "<h3> 2. Buat class Book dengan construct param title, author lalu tampilkan saat objek dibuat</h3>";

class Book {
	public $title,
			  $author;
	public function __construct ($title = "nama", $author = "nama") {
		$this->title=$title;
		$this->author=$author;
		}
		
		public function informasi () {
      return "Judul : $this->title, Penulis : $this->author";
			}
}

$buku = new Book ("Story of Salman",  "Alfa");
echo $buku->informasi();

echo "<h3> 3. Buat Class dengan destructor dengan pesan yang ditampilkan saat dihancurkan</h3>";

class DatabaseConnection {
      public $data,
              $tanggal;

      public function __construct($data, $tanggal) {
        $this->data = $data;
        $this->tanggal=$tanggal;
      }
      
      public function __destruct () {
        echo "Koneksi ke database ditutup";     
      }

      public function iniData() {
        return "Data : $this->data, Tanggal : $this->tanggal";
      }

}
 
$db = new DatabaseConnection("Salman ", "16-07-2024");
$db = $db->iniData();

echo "<br>";

echo " <h3> 4. Buat class yang memiliki constructor untuk menerima parameter dan destructor </h3>";

class Soccer  {
	public $team,
			$stadion,
			$coach,
			$date;
			
	public function __construct ($team = "kosong", $stadion = "kosong", $coach = "kosong", $date = 0) {
		 $this->team=$team;
		 $this->stadion=$stadion;
		 $this->coach=$coach;
		 $this->date=$date;
		}
	
	private function __destruct () {
		echo "Ayo beri dukungan terbaik untuk tim anda!";	
		}	
	public function tournamen(){
		return "Tim sepak bola " . $this->team . "akan mengikuti pertandingan yang akan diadakan di " . $this->stadion . ", tim yang dilatih oleh " . $this->coach . "akan bertanding pada tanggal " . $this->date . " nanti.";
  }
}

$sepakbola = new Soccer("Manchester United ", "Old Trafford ", "Ronaldo ", 17 );
echo $sepakbola->tournamen();
echo "<br>";

echo "<h1> Bagian 6 (VIsibility) </h1>";
echo "<h3> 1. Buat class dengan property private dan dan method public serta protected </h3>";

class Student  {
	private $name;
	public function get_name(){
		return $this->name;
	}
	
	protected function set_name($name){
		return $this->name=$name;
		}

}
class Studentt extends Student {
	public function change_name ($name) {
		return $this->set_name($name);
		}
		}
$studentt = new Studentt;
$studentt->change_name("Salman");
echo $studentt->get_name();
echo "<br>";
echo $studentt->change_name("Ujang");