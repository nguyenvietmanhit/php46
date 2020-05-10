<?php
$variable1 = '1.23';
$variable2 = 28 ;
$variable3 = null;
$variable4 = [123,false,null,1.23,FALSE,[],TRUE];
$variable5 = -1.23;
$variable6 = 'false';
$variable7 = 'php';

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
	<table >
		<tr>
			<td>STT</td>
			<td>Khai báo</td>
		</tr>
		<tr>
			<td>1</td>
			<td>
				<?php
				echo '$variable1 = ' . $variable1;
				?>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>
				<?php
				echo '$variable2 = ' . $variable2;
				?>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>
				<?php
				echo '$variable3 = ' . $variable3;
				?>
			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>
				<?php
				foreach( $variable4 as $value )
				{
					if(is_array($value)) {
						print_r($value);
						echo '<br>';
					} else {
						echo '$variable4 = ' . $value . '<br>';
					}
				}
				?>
			</td>
		</tr>
		<tr>
			<td>5</td>
			<td>
				<?php
				echo '$variable5 = ' . $variable5;
				?>
			</td>
		</tr>
		<tr>
			<td>6</td>
			<td>
				<?php
				echo '$variable6 = ' . $variable6;
				?>
			</td>
		</tr>
		<tr>
			<td>7</td>
			<td>
				<?php
				echo '$variable7 = ' . $variable7;
				?>
			</td>
		</tr>
	</table>
</body>
</html>