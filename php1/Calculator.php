<?php 
require_once "MathOperation.php";

class Calculator {
  
  private $mathOperation;

  public function __construct() {
    $this->mathOperation = new MathOperation();
  }
  
  public function calculate($a, $b, $operation) {

    switch ($operation) {
      case '+':
        return $this->mathOperation->add($a, $b);
        break;
      case '-':
        return $this->mathOperation->min($a, $b);
        break;
      case 'x':
        return $this->mathOperation->kali($a, $b);
        break;
      case '/':
        return $this->mathOperation->bagi($a, $b);
        break;
      case '%':
        return $this->mathOperation->Modulus($a, $b);
        break;
      case '^':
        return $this->mathOperation->Pangkat($a, $b);
      default:
        throw new Exception("Ngaco Ndesss");
    }
  }
}