<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$cd=$_POST['cd'];
	$cr=$_POST['cr'];
	$cv=($cd+$cr)*2;
	$dt=$cd*$cr;
	?>
	<form action="bai1day2.php" method="post">
	Chiều dài:<input type="text" name="cd">
	chiều rộng:<input type="text" name="cr">
	<input type="submit" value="Tính">
	</form>
<p><?php echo "chiều dài hình chữ nhật=$cd m";
?><br />

<?php echo "chiều rộng hình chữ nhật=$cr m";
 ?><br />

<?php echo "chu vi hình chữ nhật=$cv m";
 ?><br />

<?php echo "diện tích hình chữ nhật=$dt m<sup>2</sup>";
 ?><br />
</p>
</body>
</html>