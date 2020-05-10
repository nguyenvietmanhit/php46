<?php
$length = 4;
$width = 2;
function tinhChuVi($a,$b){
	$cv = ($a + $b)*2;
	echo "Chu vi hình chữ nhật = $cv m";
}
function tinhDienTich($a,$b){
	$dt = ($a * $b);
	echo "Diện tích hình chữ nhật = $dt m<sup>2</sup>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		p{
			color: #00B050;
		}
	</style>
</head>
<body>
	<p>Chiều dài hình chữ nhật = <?php echo $length ?>m</p>
	<p>Chiều rộng hình chữ nhật = <?php echo $width ?>m</p>
	<p><?php echo tinhChuVi($length,$width) ?></p>
	<p><?php echo tinhDienTich($length,$width) ?></p>
</body>
</html>