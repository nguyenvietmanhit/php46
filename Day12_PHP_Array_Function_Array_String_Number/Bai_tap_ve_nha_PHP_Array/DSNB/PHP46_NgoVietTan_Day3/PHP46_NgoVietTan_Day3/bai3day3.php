<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	$arrs=['PHP','HTML','CSS','JS'];
	?>
	<table border="1" cellpadding="0">
		<tr><th>Tên khoá học</th></tr>
		<?php foreach ($arrs AS $value): ?>
		<tr><td><?php echo $value?></td></tr>
		<?php endforeach; ?>
	</table>
</body>
</html>