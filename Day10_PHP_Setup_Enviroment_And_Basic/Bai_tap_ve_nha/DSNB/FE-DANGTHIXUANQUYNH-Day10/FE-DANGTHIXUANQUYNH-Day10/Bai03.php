<?php
$variable1 ='123abc';
var_dump($variable1);
$variable1= (int)$variable1;
var_dump($variable1);
$variable1= (float)$variable1;
var_dump($variable1);
$variable1= (boolean)$variable1;
var_dump($variable1);
echo "<br>";

$variable2=null;
var_dump($variable2);
//$variable2= (int)$variable2;
var_dump((int)$variable2);
//$variable2= (boolean)$variable2;
var_dump((boolean)$variable2);
//$variable2= (float)$variable2;
var_dump((float)$variable2);
//$variable2 =(string)$variable2;
var_dump((string)$variable2);
echo "<br>";

$variable3='';
var_dump($variable3);
$variable3= (int)$variable3;
var_dump($variable3);
$variable3= (float)$variable3;
var_dump($variable3);
$variable3= (boolean)$variable3;
var_dump($variable3);
echo "<br>";

$variable4='abc123';
var_dump($variable4);
$variable4= (int)$variable4;
var_dump($variable4);
$variable4= (float)$variable4;
var_dump($variable4);
$variable4= (boolean)$variable4;
var_dump($variable4);
echo "<br>";

$variable5='null';
var_dump($variable5);
$variable5= (int)$variable5;
var_dump($variable5);
$variable5= (float)$variable5;
var_dump($variable5);
$variable5= (boolean)$variable5;
var_dump($variable5);