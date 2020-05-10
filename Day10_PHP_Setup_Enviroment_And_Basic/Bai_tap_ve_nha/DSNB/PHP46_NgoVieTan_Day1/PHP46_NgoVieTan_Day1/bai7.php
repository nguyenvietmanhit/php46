<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$ten=$_POST['ten'];
$age=$_POST['age'];
$gt=$_POST['gt'];
?>
<form action="bai7.php" method="post">
<table>
<tr><td>Họ tên:</td><td><input type="text" name="ten"  value="<?php echo $ten ?>" /></td></tr>

<tr><td>Tuổi:</td><td><input type="number" name="age" value="<?php echo $age ?>" /></td></tr>

<tr><td>Giới tính:</td><td><input type="radio" name="gt" value="nam" <?php echo ($gt== 'nam') ?  "checked" : "" ;  ?> />Nam
<input type="radio" name="gt" value="nữ" <?php echo ($gt== 'nữ') ?  "checked" : "" ;  ?> />Nữ</td></tr>

<tr><td colspan="2"><input type="submit" value="Hoàn Thành" /></td></tr>
</table>
</form>
</body>
</html>