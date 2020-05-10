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
<form action="bai8.php" method="post">
<table>
<tr><td>Chiều dài:</td><td><input type="text" name="cd"   /></td></tr>
<tr><td>Chiều rộng:</td><td><input type="text" name="cr"  /></td></tr>
<tr><td colspan="2"><input type="submit" value="tính" /></td></tr>
</table>
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