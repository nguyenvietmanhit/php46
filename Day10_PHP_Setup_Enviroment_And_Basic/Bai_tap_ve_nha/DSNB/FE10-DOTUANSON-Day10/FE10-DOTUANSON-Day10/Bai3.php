<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/8/2020
 * Time: 7:56 AM
 */
$variable1='123abc';
$variable1=(int)$variable1;
echo "<br/>So nguyen: ";
var_dump($variable1);
$variable1=(float)$variable1;
echo "<br/>So thuc:";
var_dump($variable1);
$variable1=(string)$variable1;
echo "<br/>Kieu chuoi:";
var_dump($variable1);
$variable1=(boolean)$variable1;
echo"<br/>Kieu boolean: ";
var_dump($variable1);


echo "<br/><br/>";
$variable2=null;
$variable2=(int)$variable2;
echo "<br/>So nguyen: ";
var_dump($variable2);
$variable2=(float)$variable2;
echo "<br/>So thuc:";
var_dump($variable2);
$variable2=(string)$variable2;
echo "<br/>Kieu chuoi:";
var_dump($variable2);
$variable2=(boolean)$variable2;
echo"<br/>Kieu boolean: ";
var_dump($variable2);


echo "<br/><br/>";
$variable3='';
$variable3=(int)$variable3;
echo "<br/>So nguyen: ";
var_dump($variable3);
$variable3=(float)$variable3;
echo "<br/>So thuc:";
var_dump($variable3);
$variable3=(string)$variable3;
echo "<br/>Kieu chuoi:";
var_dump($variable3);
$variable3=(boolean)$variable3;
echo"<br/>Kieu boolean: ";
var_dump($variable3);


echo "<br/><br/>";
$variable5='null';
$variable5=(int)$variable5;
echo "<br/>So nguyen: ";
var_dump($variable5);
$variable5=(float)$variable5;
echo "<br/>So thuc:";
var_dump($variable5);
$variable5=(string)$variable5;
echo "<br/>Kieu chuoi:";
var_dump($variable5);
$variable5=(boolean)$variable5;
echo"<br/>Kieu boolean: ";
var_dump($variable5);