<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#divBlack{
			float: left;
		}
		#divWhite{

			float: left;
		}
		#container{
			margin: 0px 30%;
		}
		#divBlack,#divWhite{
			background: white;
			width: 14.2857142857%;
			height: 70px;
		}
	</style>
</head>
<body>

</body>
</html>

<?php
echo '<div id="container">';
for ($i=1; $i <=49 ; $i++) { 
	if ($i%2!=0) {
		echo '<div id="divBlack"></div>';
	}else{
		echo '<div id="divWhite"></div>';
	}
}
echo "</div>";

?>

