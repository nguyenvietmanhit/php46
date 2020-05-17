<?php
$arrs=['a','b','ABC','D'];
$string = implode(' ',$arrs);
$string =strtolower($string);
$arr=explode(' ',$string);
echo "<prev>";
print_r($arr);
echo "</prev>";