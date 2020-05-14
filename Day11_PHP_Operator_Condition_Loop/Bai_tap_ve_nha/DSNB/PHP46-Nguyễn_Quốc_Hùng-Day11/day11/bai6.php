<?php
function tinhTong($n){
	$s = 0;
	for ($i=1; $i <=$n ; $i++) { 
		$s += ($i); 
	}
	return $s;
}
echo "<b>";
echo " Tổng các số từ 1 đến 500 = ".tinhTong(500);
echo "</b>";
?>