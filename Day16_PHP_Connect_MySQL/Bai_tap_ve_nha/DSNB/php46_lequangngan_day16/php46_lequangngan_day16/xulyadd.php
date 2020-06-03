<?php
	require_once 'connect.php';
	$error = '';
	if (isset($_POST['submit'])) {
		$name = $_POST['text'];
		$description = $_POST['description'];
		$salary = $_POST['salary'];
		$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
		$birthday = $_POST['day'];
		// validate
		if (empty($name)) {
			$error = 'Name không được để trống. Vui lòng kiểm tra lại !';
		}
		if (empty($error)) {
			$sql = "INSERT INTO nhanvien(`name`,`description`,`salary`,`gender`,`birthday`)
					VALUES ('$name','$description','$salary','$gender','$birthday')";
			$query = mysqli_query($conn,$sql);
			if ($query) {
				header('location: danhsach.php');
				exit();
			}
		}
	}

?>