<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$dk=$_POST['dk'];
	$bk=$dk/2;
	$cv=$dk*3.14;
	$dt=$bk*$bk*3.14;
	?>
	<form action="bai3day2.php" method="post">
	Nhập đường kính:<input type="text" name="dk">
	<input type="submit" value="Tính">
	</form>
<p>
<?php echo "Độ dài đường kính là=$dk m";
?><br />
<?php echo "chu vi hình tròn=$cv m";
 ?><br />
<?php echo "diện tích hình tròn=$dt m<sup>2</sup>";
 ?><br />
</p>
</body>
</html>