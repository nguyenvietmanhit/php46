<?php
$arrs = ['1','b','c','d'];
function lowerCase($arrs){
    $arrs = array_flip($arrs);
    $arrs = array_change_key_case($arrs, CASE_LOWER);
    $arrs = array_flip($arrs);
    return $arrs;
};
$lower = lowerCase($arrs);
echo "<pre>";
print_r($lower);
echo "</pre>";


?>
