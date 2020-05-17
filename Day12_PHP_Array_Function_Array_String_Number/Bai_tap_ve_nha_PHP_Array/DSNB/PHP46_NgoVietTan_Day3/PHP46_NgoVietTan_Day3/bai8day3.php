<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$arrs=['programming','php','basic','dev','is','program is PHP'];
	$max=strlen($arrs[0]);
	$min=strlen($arrs[0]);
	for($i=0;$i<count($arrs);$i++)
	{
		if(strlen($arrs[$i])>=$max) $max=strlen($arrs[$i]);
		if(strlen($arrs[$i])<=$min) $min=strlen($arrs[$i]);
	}
	for($i=0;$i<count($arrs);$i++)
	{
		if(strlen($arrs[$i])==$max) 
		{
			echo "chuỗi lớn nhất là $arrs[$i], độ dài =$max";
			echo "<br />";
		}
		if(strlen($arrs[$i])==$min) {
			echo "chuỗi nhỏ nhất là $arrs[$i], độ dài =$min";
		}
	}
	?>
</body>
</html>