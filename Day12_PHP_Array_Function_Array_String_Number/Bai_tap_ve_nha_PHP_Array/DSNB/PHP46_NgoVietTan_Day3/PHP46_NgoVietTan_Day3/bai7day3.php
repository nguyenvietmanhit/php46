


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$arrs=[12,5,200,10,125,60,90,345,-123,100,-125,0];
	for($i=0;$i<count($arrs);$i++)
	{
		if($arrs[$i]>=100&&$arrs[$i]<=200&&$arrs[$i]%5==0) echo $arrs[$i]."<br />";
	}
	?>
</body>
</html>