<?php 
	const db_host = 'localhost';
	const db_username = 'root';
	const db_password = '';
	const db_name = 'qlnv';
	const db_port = '3306';
	$conn = mysqli_connect(db_host,db_username,db_password,db_name,db_port);
	if (!$conn) {
		die("ket noi database that bai". mysqli_connect_error());
	}
?>