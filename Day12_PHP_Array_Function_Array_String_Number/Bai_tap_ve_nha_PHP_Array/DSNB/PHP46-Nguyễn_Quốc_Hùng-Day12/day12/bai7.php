<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0];

function getNumbers($arr){
	$outPut = "";
	foreach ($arr as $key => $value) {
		if ($value>=100&&$value<=200&&$value%5==0) {
			$outPut .= $value." "; 
		}
	}
	return $outPut;
}

echo getNumbers($array);
?>