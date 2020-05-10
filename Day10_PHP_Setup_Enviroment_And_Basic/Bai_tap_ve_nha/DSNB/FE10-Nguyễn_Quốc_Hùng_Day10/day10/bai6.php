<?php
$name = "Nguyễn Quốc Hùng";
$age = 21;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.adress{
			height: 60px;
		}
		.btn{
			color: white;
			background: #8BC34A;
			width: 100%;
			text-align: center;
			margin: 10px 0px;
		}
		.container{
			background: #F8F9FA;
			margin-top: 20px;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>
	<form action="#" method="GET">
		<div class="container">
			<h3><b>Form căn bản</b></h3>
			<div>
				<p>Họ tên</p>
				<input type="text" name="" placeholder="" class="form-control name">
			</div>
			<div>
				<p>tuổi</p>
				<input type="text" name="" placeholder="" class="form-control age">
			</div>
			<div>
				<p>Quê quán</p>
				<textarea name="" placeholder="" class="form-control"></textarea>
			</div>
			<div>
				<p>Ảnh đại diện</p>
				<input type="file" name="" placeholder="" class="form-control">
			</div>
			<button class="btn">submit</button>
		</div>
	</form>
</body>
<script type="text/javascript">
	var a = <?php echo json_encode($name); ?>;
	$(".name").attr("placeholder",a);
	var b = <?php echo json_encode($age); ?>;
	$(".age").attr("placeholder",b);
</script>
</html>