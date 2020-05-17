<?php
$numbers = array(
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
);
$first = reset($numbers);
$last =end($numbers);
print_r($first);
echo "<br>";
print_r($last);
echo "<br>";
$max =max($numbers);
echo $max;
echo "<br>";
$min =min($numbers);
echo $min;
echo "<br>";
print_r(array_sum($numbers));
echo "<br>";
asort($numbers);
foreach($numbers as $key => $val){
    echo $key ."=>".$val. "<br>";
}
arsort($numbers);
foreach($numbers as $key => $val){
    echo $key ."=>".$val. "<br>";
}
ksort($numbers);
foreach($numbers as $key => $val){
    echo $key ."=>".$val. "<br>";
}
krsort($numbers);
foreach($numbers as $key => $val){
    echo $key ."=>".$val. "<br>";
}