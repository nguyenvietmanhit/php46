<?php
$a = [1, 2, 3];
$b = ["a", "b"];

function GhepPhanTu($a, $b) {
  $result = [];
  foreach ($a as $a_key => $a_value) {

    foreach ($b as $b_key => $b_value) {
      $temp = [];
      $temp[] = $a_value;
      $temp[] = $b_value;
      $result[] = $temp;
    }
  }
  return $result;
}



function GhepPhanTuNangCao($arrInput) {
  $count = count($arrInput);
}


$arrInput = [
  0 => [1, 'a'],
  1 => ['x', 1],
  2 => ['b', 2],
];

GhepPhanTuNangCao()