<?php

$arrs1 = [2,5,6,9,2,5,6,12,5];
$arrs2 = [2, 5, 2];
$arrs3 = [22, 5, -1];
$arrs4 = [1, 5, -1];
function getsResult($operator, $arrs)
{
	$result = $arrs[0];
	$output = "";
	foreach ($arrs as $key => $value) {
		if ($key == (count($arrs)-1)) {
			$output .= $arrs[$key]." = ";
		}
		else{
			$output .= $arrs[$key]." $operator ";
		}
		if($key == 0) {
			continue;
		}
		if ($operator == '+') {
			$result += $value;
		} else if($operator == '-') {
			$result -= $value;
		} else if($operator == '*') {
			$result *= $value;
		} else if($operator == '/') {
			$result /= $value;
		}
	}
	$output .= $result."<br>";
	return $output;
}

function printResult($arrs) 
{
	echo "Tổng các phần tử = " . getsResult('+', $arrs);
	echo "Hiệu các phần tử = " . getsResult('-', $arrs);
	echo "Tích các phần tử = " . getsResult('*', $arrs);
	echo "Thương các phần tử = " . getsResult('/', $arrs);
	echo '<hr>';
}

printResult($arrs1);
printResult($arrs2);
printResult($arrs3);
printResult($arrs4);


// $number = 4;
// echo ($number == 5) ? 'dung' : 'sai';


?>


