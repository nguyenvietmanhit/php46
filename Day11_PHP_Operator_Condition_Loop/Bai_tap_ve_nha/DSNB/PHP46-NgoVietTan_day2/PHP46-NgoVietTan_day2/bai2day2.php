<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$c=$_POST['c'];
	$cv=$c*4;
	$dt=$c*$c;
	?>
	<form action="bai2day2.php" method="post">
	Chiều dài cạnh:<input type="text" name="c">
	<input type="submit" value="Tính">
	</form>
<p><?php echo "Sao lại là hình chữ vuông thế anh ^^";
?><br />
<?php echo "chiều dài cạnh hình chữ vuông=$c m";
?><br />
<?php echo "chu vi hình chữ vuông=$cv m";
 ?><br />
<?php echo "diện tích hình chữ vuông=$dt m<sup>2</sup>";
 ?><br />
</p>
</body>
</html>