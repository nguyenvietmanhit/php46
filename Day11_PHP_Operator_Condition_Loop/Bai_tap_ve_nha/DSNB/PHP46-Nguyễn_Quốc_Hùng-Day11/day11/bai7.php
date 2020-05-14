<?php
function displayStarts($n){
for ($i=1; $i <=$n ; $i++) { 
	$k = 1;
	do{
		echo " * ";
		$k++;
	}
	while ($k<=$i);
	echo "<br />";
}
}
displayStarts(5);
?>