<?php

class Sortaray {
  public static function sortArray($arr) {
    sort($arr);
    echo "Array yang sudah diurutkan: ";
    return $arr;
  }

  public static function bubbleSort($arr)
  {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
      for ($j = 0; $j < $n - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j + 1];
          $arr[$j + 1] = $temp;
        }
      }
    }
    return $arr;
  }
  public static function selectionSort($arr){
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++){
      $min_index = $i;

      for ($j = $i + 1; $j < $n; $j++){
        if ($arr[$j] < $arr[$min_index]){
          $min_index = $j;
        }
      }

      if ($minIndex != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_index];
        $arr[$min_index] = $temp;
      }
    }
    return $arr;
  }
}

$array1 = [9.123, 7.456, 1.789, 6.234, 2.567, 5.890, 8.123, 4.456, 3.789, 0.234, 11.567, 15.890, 13.123, 10.456, 12.789, 14.234, 19.567, 16.890, 17.123, 18.456  ];
print_r(ArraySorter::sortArray($array1));
print_r(ArraySorter::bubbleSort($array1));
print_r(ArraySorter::selectionSort($array1));