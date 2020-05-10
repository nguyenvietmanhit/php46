<?php

echo "VARIABLE1 <br>";


//INT
$variable1 = '123abc';
$variable1 = (int) $variable1;
var_dump($variable1);//123
echo "<br>";

//FLOAT
$variable1 = '123abc';
$variable1 = (float) $variable1;
var_dump($variable1);//123
echo "<br>";

//STRING
$variable1 = '123abc';
$variable1 = (string) $variable1;
var_dump($variable1);//"123abc"
echo "<br>";

//BOOLEAN
$variable1 = '123abc';
$variable1 = (boolean) $variable1;
var_dump($variable1);//true
echo "<br>";
echo "<hr>";

//----------------------------------------------------------------------------------------------------------------------

echo "VARIABLE2 <br>";

//INT
$variable2 = null;
$variable2 = (int) $variable2;
var_dump($variable2);//0
echo "<br>";

//FLOAT
$variable2 = null;
$variable2 = (float) $variable2;
var_dump($variable2);//0
echo "<br>";

//STRING
$variable2 = null;
$variable2 = (string) $variable2;
var_dump($variable2);//""
echo "<br>";

//BOOLEAN
$variable2 = null;
$variable2 = (boolean) $variable2;
var_dump($variable2);//false
echo "<br>";
echo "<hr>";

//----------------------------------------------------------------------------------------------------------------------


echo "VARIABLE3 <br>";

//INT
$variable3 = '';
$variable3 = (int) $variable3;
var_dump($variable3);//0
echo "<br>";

//FLOAT
$variable3 = '';
$variable3 = (float) $variable3;
var_dump($variable3);//0
echo "<br>";

//STRING
$variable3 = '';
$variable3 = (string) $variable3;
var_dump($variable3);//""
echo "<br>";

//BOOLEAN
$variable3 = '';
$variable3 = (boolean) $variable3;
var_dump($variable3);//false
echo "<br>";
echo "<hr>";

//----------------------------------------------------------------------------------------------------------------------


echo "VARIABLE4 <br>";


//INT
$variable4 = 'abc123';
$variable4 = (int) $variable4;
var_dump($variable4);//0
echo "<br>";

//FLOAT
$variable4 = 'abc123';
$variable4 = (float) $variable4;
var_dump($variable4);//0
echo "<br>";

//STRING
$variable4 = 'abc123';
$variable4 = (string) $variable4;
var_dump($variable4);//"abc123"
echo "<br>";

//BOOLEAN
$variable4 = 'abc123';
$variable4 = (boolean) $variable4;
var_dump($variable4);//true
echo "<br>";
echo "<hr>";

//----------------------------------------------------------------------------------------------------------------------


echo "VARIABLE5 <br>";


//INT
$variable5 = 'null';
$variable5 = (int) $variable5;
var_dump($variable5);//0
echo "<br>";

//FLOAT
$variable5 = 'null';
$variable5 = (float) $variable5;
var_dump($variable5);//0
echo "<br>";

//STRING
$variable5 = 'null';
$variable5 = (string) $variable5;
var_dump($variable5);//"null
echo "<br>";

//BOOLEAN
$variable5 = 'null';
$variable5 = (boolean) $variable5;
var_dump($variable5);//true
echo "<br>";
echo "<hr>";


