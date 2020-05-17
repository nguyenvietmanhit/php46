<?php
$key=[
    'field1'=>'first',
    'field2'=>'second',
    'field3'=>'third',
];
$value=[
    'field1value'=>'dinosaur',
    'field2value'=>'pig',
    'field3value'=>'platypus',
];
$keyAndvalue=array_combine(array_values($key),array_values($value));
echo "<pre>";
print_r($keyAndvalue);
echo "</pre>";

