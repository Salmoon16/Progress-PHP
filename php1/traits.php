<?php
trait message1 {
  public function msg1($a) {
    echo "$a is fun! \n";
  }
}

trait message2 {
  public function msg2($a) {
    echo "$a is tired! \n";
  }
}

trait message3 {
  public function msg3($a) {
    echo "$a is happy! \n";
  }
}

class Welcome {
  use message1, message2, message3;
}

$obj = new Welcome();
$obj->msg1("PHP");
$obj->msg2("Coding");
$obj->msg3("Programmer");