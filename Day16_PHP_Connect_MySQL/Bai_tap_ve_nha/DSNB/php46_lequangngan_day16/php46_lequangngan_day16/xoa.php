<?php 

	require_once 'connect.php';
	$id = $_GET['id'];
	$sql = "delete from nhanvien where id = '$id'";
	$q = mysqli_query($conn,$sql);
	header('location: danhsach.php');
	exit();
 ?>