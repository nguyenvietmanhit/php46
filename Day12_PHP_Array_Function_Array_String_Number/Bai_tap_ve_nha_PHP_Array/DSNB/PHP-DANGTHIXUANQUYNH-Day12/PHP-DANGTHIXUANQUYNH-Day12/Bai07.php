<?php
$array = [12, 5, 200, 10, 125, 123, 60, 90, 345, -123, 100,  -125, 0];
$math = function($value){
    if ($value >=100 && $value <=200){
        if($value%5 ==0){
            return true;
        }
    }
    return false;
};
$b = array_filter($array,$math);
print_r($b);