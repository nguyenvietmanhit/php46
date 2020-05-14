<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="bai5day2.php" method="post">
	Nhập n:<input type="text" name="n">
	<input type="submit" value="Tính">
	</form>
    <?php
	$i=$j=1;
	$s=0;
	$n=$_POST['n'];
	echo "S($n)=";
	for($j;$j<=$n;$j++){
	$s=$s+1/$j;
	}
	for($i;$i<=$n-1;$i++){
	echo '1/'.$i.'+';
	}
	echo '1/'.$n.'='.$s;
    ?>
</body>
</html>