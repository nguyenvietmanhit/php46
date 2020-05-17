<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
function hop_mang($arr1, $arr2){
    $temp =array();
    $temp = $arr1;
    if (is_scalar($arr2)){
        $temp[] =$arr2;
    }
    else{
        foreach ($arr2 as $key => $value){
            $temp[] = $value;
        }
    }
    return $temp;
    echo "<pre>";
    print_r(arr_mang)
    echo "</pre>";
}
?>