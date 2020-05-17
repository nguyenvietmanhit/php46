<?php

$arrs1 = ['1', 'B','C', 'E'];
$arrs2 = ['a', 0, null, false];

function convertArr($arr)
{
	$outPut = array_map('strtolower', $arr);
	return $outPut;
}

print_r(convertArr($arrs1));
print_r(convertArr($arrs2));
?>