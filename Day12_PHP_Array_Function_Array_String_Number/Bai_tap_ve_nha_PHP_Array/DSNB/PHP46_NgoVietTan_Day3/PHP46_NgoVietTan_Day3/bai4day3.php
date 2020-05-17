<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	$arrs=[
		"italy"=>"rome",
		"luxembourg"=>"luxembourg",
		"belgium"=>"brussels",
		"denmark"=>"copenhagen"
	];
	foreach($arrs AS $key => $value)
	{
		echo "Thủ đô của $key là $value<br />";
	}
	?>
</body>
</html>