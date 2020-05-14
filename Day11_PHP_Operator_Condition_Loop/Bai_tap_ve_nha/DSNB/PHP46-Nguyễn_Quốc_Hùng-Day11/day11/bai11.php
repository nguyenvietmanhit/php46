<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#divPrimeReal{
			background-image: url("div_primary.PNG");
		}
		#divPrimeFake{
			background: white;

		}
		#container{
			margin: 0px 30%;
		}
		#divPrimeReal,#divPrimeFake{
			width: 9%;
			height: 50px;
			float: left;
			border: 1px solid black;
			line-height: 50px;
			text-align: center;
		}
	</style>
</head>
<body>

</body>
</html>

<?php

function isPrimeNumber($n) {

	if ($n < 2) {
		return false;
	}
	$squareRoot = sqrt ( $n );
	for($i = 2; $i <= $squareRoot; $i ++) {
		if ($n % $i == 0) {
			return false;
		}
	}
	return true;
}


echo '<div id="container">';
for ($i=1; $i <=100 ; $i++) { 
	if (isPrimeNumber ( $i )) {
		echo '<div id="divPrimeReal">'.$i.'</div>';
	}
	else{
		echo '<div id="divPrimeFake">'.$i.'</div>';
	}
}
echo "</div>";
?>

