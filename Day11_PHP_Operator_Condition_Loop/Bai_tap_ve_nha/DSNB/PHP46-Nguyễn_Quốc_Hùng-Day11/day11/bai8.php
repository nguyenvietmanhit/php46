<?php
function displayStartsDown($n){
	for ($i=1; $i <=$n ; $i++) { 
		$h = $i-1;
		do{
			echo " * ";
			$h++;
		}
		while ($h<$n);
		echo "<br />";
	}
}

function displayStartsUp($n){
	for ($i=1; $i <=$n ; $i++) { 
		$k = 1;
		do{
			echo " * ";
			$k++;
		}
		while ($k<=$i);
		echo "<br />";
		if ($i==$n) {
			displayStartsDown($n);
		}
	}
}


displayStartsUp(5);
?>