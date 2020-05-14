<?php
function tinhBieuThuc($n){
	$s = 0;
	for ($i=1; $i <=$n ; $i++) { 
		$s += 1/($i); 
	}
	return $s;
}
echo "<b>";
echo "S(10) = ".tinhBieuThuc(10);
echo "</b>";
?>