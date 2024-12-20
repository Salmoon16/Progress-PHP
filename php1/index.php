<?php
require_once "Calculator.php";

try{
    $calculator = new Calculator();

    echo "Masukkan Angka pertama : ";
    $a = (float) trim(fgets(STDIN));

    echo "Masukkan Angka kedua : ";
    $b = (float) trim(fgets(STDIN));

    echo "Silahkan pilih Operasi yang hendak digunakan : ";
    $operation = trim(fgets(STDIN));

    if($operation != "+" && $operation != "-" && $operation != "/" && $operation != "*" && $operation != "%" && $operation != "^") {
        throw new Exception("Operasi yang Anda masukkan tidak valid \n");
    }
    $result = $calculator -> calculate($a, $b, $operation);
    echo "Hasil dari " . $a . " " . $operation . " " . $b . " = " . $result . "\n";
   
} catch (Exception $e) {
    echo "Terjadi kesalahan". $e->getMessage() . "\n";
}