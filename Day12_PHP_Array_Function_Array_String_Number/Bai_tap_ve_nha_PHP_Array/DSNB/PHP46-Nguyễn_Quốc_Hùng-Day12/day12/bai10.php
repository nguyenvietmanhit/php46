<?php

$arrs1 = ['1', 'b','c', 'd'];
$arrs2 = ['a', 0, null, false];

function convertArr($arr)
{
	$outPut = array_map('strtoupper', $arr);
	return $outPut;
}

print_r(convertArr($arrs1));
print_r(convertArr($arrs2));
?>