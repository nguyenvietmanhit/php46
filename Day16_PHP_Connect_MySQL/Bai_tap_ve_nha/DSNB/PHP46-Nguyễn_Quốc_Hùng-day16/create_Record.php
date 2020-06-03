<?php
session_start();
$error = null;
if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$salary = $_POST['salary'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	require 'database.php';
	
	$queryInsert = $connection->prepare("INSERT INTO employees(`name`, `description`, `salary`, `gender`, `birthday`) VALUES (:name, :description, :salary, :gender, :birthday)");
	$queryInsert->bindParam(":name", $name);
	$queryInsert->bindParam(":description", $description);
	$queryInsert->bindParam(":salary", $salary);
	$queryInsert->bindParam(":gender", $gender);
	$queryInsert->bindParam(":birthday", $birthday);

	$isInsert = $queryInsert->execute();
	if($isInsert) {
		header('Location: '. 'employees_List.html');
	}
} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới nhân viên</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="create_Record.css">
</head>
<body>
	<div class="containt">
		<form action="" method="POST">
			<h1>Create Record</h1>
			<hr>
			<b>Name</b><br>
			<input type="text" name="name" id="name"><br>
			<b>Description</b><br>
			<textarea name="description"></textarea><br>
			<b>Salary</b><br>
			<input type="text" name="salary"><br>
			<b>Gender</b><br>
			<input type="radio" name="gender" value="Male" checked>
			Male
			<input type="radio" name="gender" value="Female">
			Female<br>
			<b>Birthday</b><br>
			<input type="date" name="birthday"><br>
			<input type="submit" name="save" value="Save" class="save" onclick="validateSubmit(event)">
			<input type="submit" name="cancel" value="Cancel" class="cancel">
		</form>
		<h3 style="color: red">
			<?php echo $error; ?>
		</h3>
	</div>
	<script type="text/javascript">
		function validateSubmit(e) {
			let input = document.getElementById('name').value
			if(!input || input.trim().length == 0) {
				e.preventDefault();
				alert(1);
			}
		}
	</script>
</body>
</html>