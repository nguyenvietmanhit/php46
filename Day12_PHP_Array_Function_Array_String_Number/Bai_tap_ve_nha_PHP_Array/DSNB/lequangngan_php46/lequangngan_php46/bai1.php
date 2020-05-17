<?php 
	$arr = [2,5,6,9];
	$sum = 0;
	$sum1 = 1;
	echo "tong cac phan tu = ";
	foreach ($arr as $key => $value) {
		echo "$value + ";
		$sum += $value;
	}
	echo "= $sum";
	// tich phan tu
	echo "<br>";
	$sum1 = 1;
	echo "tich cac phan tu = ";
	foreach ($arr as $key => $value) {
		echo "$value * ";
		$sum1 *= $value;
	}
	echo "= $sum1";
	// hieu phan tu
	echo "<br>";
	$sum2 = 0;
	echo "hieu cac phan tu = ";
	foreach ($arr as $key => $value) {
		echo "$value - ";
		$sum2 -= $value;
	}
	echo "= $sum2";
	// thuong cac phan tu
	echo "<br>";
	$sum3 = 1;
	echo "hieu cac phan tu = ";
	foreach ($arr as $key => $value) {
		echo "$value / ";
		$sum3 /= $value;
	}
	echo "= $sum3";
?>