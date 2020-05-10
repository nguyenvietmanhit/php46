<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$ten="Ngô Việt Tân";
$tuoi="21";
$ns="11/10/1999";
$gt="Nam";
$qq="Việt Yên-Bắc Giang";
?>
<form action="bai4.php" method="post">
<table border="1"><tr><td>Họ tên:</td><td>Tuổi:</td><td>Ngày sinh:</td><td>Giới tính:</td><td>Quê Quán:</td></tr>
<tr><td><input type="text" value="<?php echo $ten ?>" /></td>
<td><input type="text" value="<?php echo $tuoi ?>" /></td>
<td><input type="text" value="<?php echo $ns ?>" /></td>
<td><input type="text" value="<?php echo $gt ?>" /></td>
<td><input type="text" value="<?php echo $qq ?>" /></td></tr>
</table>
</form>
</body>
</html>