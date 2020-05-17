<?php
$array = [1, 2, 3, 4];
$sum = array_sum($array);
print_r($sum); //10
$arr1 = [1,2,4,5,1,3,2,4,5,7,6];
$newArr = array_unique($arr1);
echo "<pre>";
print_r($newArr);
echo "</pre>";
$arr2 = [1,2,4,5,1,3,2,4,5,7,6];
$newArr2 = array_slice($arr2,1,1);
print_r($newArr2);
//......
?>