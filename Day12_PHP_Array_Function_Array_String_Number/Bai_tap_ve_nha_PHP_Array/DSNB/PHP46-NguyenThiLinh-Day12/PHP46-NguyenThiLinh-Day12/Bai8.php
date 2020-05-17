<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
function maxLengthIndex($arr){
    $index = 0;
    for($i = 1; $i < count($arr); $i++){
        if(strlen($arr[$index]) < strlen($arr[$i])) $index = $i;
    }
    return $index;
}
function minLengthIndex($arr){
    $index = 0;
    for($i = 1; $i < count($arr); $i++){
        if(strlen($arr[$index]) > strlen($arr[$i])) $index = $i;
    }
    return $index;
}
$maxString = $array[maxLengthIndex($array)];
$minString = $array[minLengthIndex($array)];
$maxStringLength = strlen($maxString);
$minStringLength = strlen($minString);
echo "Chuỗi lớn nhất là \"$maxString\", độ dài = $maxStringLength 
    <br/>
    Chuỗi nhỏ nhất là \"$minString\", độ dài = $minStringLength
    ";
