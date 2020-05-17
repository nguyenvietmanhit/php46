<?php
$arrs = ['đỏ','xanh','cam','trắng'];
$names = ['Anh','Sơn',"",'Thắng'];
$k=0;
foreach ($arrs as $key1 => $value1) {
	foreach ($names as $key2 => $value2) {
		if ($key1==$key2&&$key1!=2) {
			echo "Màu ".'<span class="color">'.$value1.'</span>'." là màu yêu thích của ".$value2.", ";
			$k++;
		}
	}
	if ($k==3) {
		echo "còn màu yêu thích của tôi là màu ".'<span class="color">'.$arrs[3].'</span>';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.color{
			color: red;
		}
	</style>
</head>
<body>

</body>
</html>