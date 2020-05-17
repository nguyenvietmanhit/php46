<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$arrs=[2,5,6,9,2,5,6,12,5];
	$tong=0;
	$hieu=2;
	$tich=1;
	$thuong=2;
	foreach($arrs AS $value)
	{
		$tong += $value;
		$hieu -= $value;
		$tich *= $value;
		$thuong /= $value;
	}
	echo "tổng các phần tử =";
	for($i=0;$i<count($arrs);$i++)
	{
		echo $arrs[$i];
		if($i==(count($arrs)-1))
		   {
			break;
		   }
		echo "+";
	}
	echo "=".$tong;
	echo "<br />";
	
	
	echo "tích các phần tử =";
	for($i=0;$i<count($arrs);$i++)
	{
		echo $arrs[$i];
		if($i==(count($arrs)-1))
		   {
			break;
		   }
		echo "*";
	}
	echo "=".$tich;
	echo "<br />";
	echo "hiệu các phần tử =";
	for($i=0;$i<count($arrs);$i++)
	{
		echo $arrs[$i];
		if($i==(count($arrs)-1))
		   {
			break;
		   }
		echo "-";
	}
	echo "=".$hieu;
	echo "<br />";
	echo "thuong các phần tử =";
	for($i=0;$i<count($arrs);$i++)
	{
		echo $arrs[$i];
		if($i==(count($arrs)-1))
		   {
			break;
		   }
		echo "/";
	}
	echo "=".$thuong;
	echo "<br />";
	?>
</body>
</html>