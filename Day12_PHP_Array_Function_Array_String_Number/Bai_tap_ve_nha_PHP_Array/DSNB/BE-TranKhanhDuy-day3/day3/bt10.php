<?php
$arrs = ['1','b','c','d'];
function upperCase($arrs){
    $arrs = array_flip($arrs);
    $arrs = array_change_key_case($arrs,CASE_UPPER);
    $arrs = array_flip($arrs);
    return $arrs;
}
$upper = upperCase($arrs);
echo "<pre>";
print_r($upper);
echo"</pre>";
?>