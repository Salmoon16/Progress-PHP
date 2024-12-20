<?php  
class Wahidun {
  public static function gapung () {
    echo "Eaaa slebew";
    echo "<br>";
  }
}
Wahidun::gapung();  
//

class Dzikrul {
  public static function dzikrul () {
    echo "Salamun, kami Dzikrul";
    echo "<br>";
  }

  public function __construct () {
    self::dzikrul();
  }
}
//kalo pake construct langsung aja new trus nama class
new Dzikrul();
// $obj =new Dzikrul();
// $obj->salman();
//->klo mau pake method tapi bukan construct
class Budiono {
    public static function budiono () {
      echo "Cita - cita Kapal Laut";
    }
}

class Siregar {
    public function siregar () {
      Budiono::budiono();
    }
}

$kapal = new Siregar();
echo $kapal -> siregar();