<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];
function addArray($x,$y){
    $temp = array();$temp[] = $x;
    if(is_scalar($y)){
        $temp[] = $y;
    }else{
        foreach ($y AS $key => $value){
            $temp[] = $value;
        }
    }
    return $temp;
}
$display = array_map('addArray',$array2,$array1);
echo "<pre>";
print_r($display);
echo "</pre>";
?>