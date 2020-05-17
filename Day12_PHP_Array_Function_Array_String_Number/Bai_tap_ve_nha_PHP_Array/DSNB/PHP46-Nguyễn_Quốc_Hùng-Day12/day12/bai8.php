<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

function getMax($arr)
{
	$max = $arr[0];
	for ($i = 1; $i < count($arr); $i++) { 
		if (strlen($max) < strlen($arr[$i])) {
			$max = $arr[$i];
		}
	}
	return $max;
}

function getMin($arr)
{
	$min = $arr[0];
	for ($i = 1; $i < count($arr); $i++) { 
		if (strlen($min) > strlen($arr[$i])) {
			$min = $arr[$i];
		}
	}
	return $min;
}

echo "Chuỗi lớn nhất là ".getMax($array).", độ dài = ".strlen(getMax($array))."<br>";
echo "Chuỗi nhỏ nhất là ".getMin($array).", độ dài = ".strlen(getMin($array))."<br>";


?>