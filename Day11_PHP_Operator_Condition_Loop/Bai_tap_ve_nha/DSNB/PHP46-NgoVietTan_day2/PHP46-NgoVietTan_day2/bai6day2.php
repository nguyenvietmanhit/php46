<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="bai6day2.php" method="post">
	Nhập n:<input type="text" name="n">
	<input type="submit" value="Tính">
	</form>
    <?php
	$i=1;
	$s=0;
	$n=$_POST['n'];
	echo "S($n)=";
	for($i;$i<=$n;$i++){
	$s=$s+$i;
	}
	echo "Tổng các số từ 1 đến $n là:".$s;
    ?>
</body>
</html>