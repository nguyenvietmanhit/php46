<?php
$name = "Nguyễn Quốc Hùng";
$age = 21;
$date = "26/09/1999";
$sex = "Nam";
$adress = "Hà Nội";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td,th{
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
			<th>Họ tên</th>
			<th>Tuổi</th>
			<th>Ngày sinh</th>
			<th>Giới tính</th>
			<th>Quê quán</th>
		</tr>
		<tr>
			<td>				<?php
			echo $name;
			?></td>
			<td>				<?php
			echo $age;
			?></td>
			<td>				<?php
			echo $date;
			?></td>
			<td>				<?php
			echo $sex;
			?></td>
			<td>				<?php
			echo $adress;
			?></td>
		</tr>
	</table>
</body>
</html>