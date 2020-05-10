<?php
$variable1 = '123abc';
$variable2 = null ;
$variable3 = "";
$variable4 = 'abc123';
$variable5 = 'null';
function convertInt($variable){
	$variable = (int) $variable;
	echo $variable;
}
function convertFloat($variable){
	$variable = (float) $variable;
	echo $variable;
}
function convertString($variable){
	$variable = (string) $variable;
	echo $variable;
}
function convertBoolean($variable){
	$variable = (boolean) $variable;
	echo var_dump($variable);;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td{
			border : 1px solid black;
		}
		table{
			border-collapse: collapse;
			width: 100%;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>Khai báo biến</td>
			<td>Ép sang Int</td>
			<td>Ép sang Float</td>
			<td>Ép sang String</td>
			<td>Ép sang Boolean</td>
		</tr>
		<tr>
			<td><?php
			echo '$variable1 = ' . $variable1;
			?></td>
			<td><?php
			convertInt($variable1);
			?></td>
			<td><?php
			convertFloat($variable1);
			?></td>
			<td><?php
			convertString($variable1);
			?></td>
			<td><?php
			convertBoolean($variable1);
			?></td>
		</tr>
		<tr>
			<td><?php
			echo '$variable2 = ' . $variable2;
			?></td>
			<td><?php
			convertInt($variable2);
			?></td>
			<td><?php
			convertFloat($variable2);
			?></td>
			<td><?php
			convertString($variable2);
			?></td>
			<td><?php
			convertBoolean($variable2);
			?></td>
		</tr>
		<tr>
			<td><?php
			echo '$variable3 = ' . $variable3;
			?></td>
			<td><?php
			convertInt($variable3);
			?></td>
			<td><?php
			convertFloat($variable3);
			?></td>
			<td><?php
			convertString($variable3);
			?></td>
			<td><?php
			convertBoolean($variable3);
			?></td>
		</tr>
		<tr>
			<td><?php
			echo '$variable4 = ' . $variable4;
			?></td>
			<td><?php
			convertInt($variable4);
			?></td>
			<td><?php
			convertFloat($variable4);
			?></td>
			<td><?php
			convertString($variable4);
			?></td>
			<td><?php
			convertBoolean($variable4);
			?></td>
		</tr>
		<tr>
			<td><?php
			echo '$variable5 = ' . $variable5;
			?></td>
			<td><?php
			convertInt($variable5);
			?></td>
			<td><?php
			convertFloat($variable5);
			?></td>
			<td><?php
			convertString($variable5);
			?></td>
			<td><?php
			convertBoolean($variable5);
			?></td>
		</tr>
	</table>
</body>
</html5