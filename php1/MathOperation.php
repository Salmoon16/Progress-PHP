<?php

class MathOperation {

  public function add($a, $b) {
      return $a + $b;
  }

  public function min($a, $b) {
    return $a - $b;
}

public function kali($a, $b) {
  return $a * $b;
}

public function bagi($a, $b) {
  if ($b == 0) {
    throw new Exception('Mana ada angka 0 dibagi');
  }
  return $a / $b;
}

public function Modulus($a, $b) {
  return $a % $b;
}

public function Pangkat($a, $b) {
  return $a ** $b;
}
}