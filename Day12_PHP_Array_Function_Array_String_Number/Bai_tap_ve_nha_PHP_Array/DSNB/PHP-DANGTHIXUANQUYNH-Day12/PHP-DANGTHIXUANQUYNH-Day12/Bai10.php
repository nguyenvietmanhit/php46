<?php
$arrs = ['1', 'b', 'c', 'd'];
//$arrs=['a',0,null,false];
$string =implode(' ,',$arrs);
$str = strtoupper($string);
$arr =explode(' ,',$str);
echo "<pre>";
print_r($arr);
echo "</prev>";