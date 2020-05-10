<?php
$name = "Nguyễn Quốc Hùng";
$email = "Hung123@gmail.com";
$phone = "0123456789";
$message = "This is a message";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.row{
			background: #F8F9FA;
			margin-top: 20px;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>
	<form action="#" method="GET">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>Name *</p>
					<input type="text" name="" class="form-control name" placeholder="">
				</div>
				<div class="col-md-4">
					<p>Email *</p>
					<input type="text" name="" class="form-control email" placeholder="">
				</div>
				<div class="col-md-4">
					<p>Phone *</p>
					<input type="text" name="" class="form-control phone" placeholder="">
				</div>
				<div class="col-md-12">
					<p>Message *</p>
					<textarea placeholder="" class="form-control message"></textarea> 
				</div>
				<button class="btn btn-warning" style="margin:15px;">Send message</button>
				<p class="col-md-12">* These fields are required.</p>
			</div>
		</div>
	</form>
	<p class="display container"></p>
</body>

<script type="text/javascript">
	var a = <?php echo json_encode($name); ?>;
	$(".name").attr("placeholder",a);
	var b = <?php echo json_encode($email); ?>;
	$(".email").attr("placeholder",b);
	var c = <?php echo json_encode($phone); ?>;
	$(".phone").attr("placeholder",c);
	var d = <?php echo json_encode($message); ?>;
	$(".message").attr("placeholder",d);
	$( "button" ).click(function() {
		$(".display").html(a+"<br>"+b+"<br>"+c+"<br>"+d);
	});
</script>
</html>