<?php
function multiplication($n){
	for ($i=1; $i <=10 ; $i++) { 
		$result = $n * $i;
		echo $n."x".$i." = ".$result."<br />";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table_title{
			background: #CDFFFF;
			color: red;
		}
		table tr td{
			border: 1px solid black;
		}
		table{
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<tr class="table_title">
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>
		<tr>
			<td><?php multiplication(1)?></td>
			<td><?php multiplication(2)?></td>
			<td><?php multiplication(3)?></td>
			<td><?php multiplication(4)?></td>
			<td><?php multiplication(5)?></td>
		</tr>
		<tr class="table_title">
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>10</td>
		</tr>
		<tr>
			<td><?php multiplication(6)?></td>
			<td><?php multiplication(7)?></td>
			<td><?php multiplication(8)?></td>
			<td><?php multiplication(9)?></td>
			<td><?php multiplication(10)?></td>
		</tr>
	</table>
</body>
</html>