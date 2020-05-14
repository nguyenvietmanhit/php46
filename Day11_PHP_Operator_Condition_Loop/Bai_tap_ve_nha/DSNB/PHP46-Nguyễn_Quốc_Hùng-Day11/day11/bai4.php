<?php
echo "<b>";
for ($i=1; $i <=50 ; $i++) { 
	echo $i;
	if ($i == 50) {
		continue;
	}
	echo " - ";
}
echo "</b>";
?>