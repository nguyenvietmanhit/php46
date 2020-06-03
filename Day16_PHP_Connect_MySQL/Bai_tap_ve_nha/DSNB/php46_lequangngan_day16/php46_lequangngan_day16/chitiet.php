<link rel="stylesheet" href="css/bootstrap.css">
<?php  
	require_once 'connect.php';
	$idd = $_GET['id'];
	$sql = "select * from nhanvien where id = '$idd'";
	$a = mysqli_query($conn,$sql);
?>
<div class="container">
	<h1>View Record</h1>
	<div class="row">
		<div class="col-6">
			<form class="form-group">
				<table>
				<?php
					while($row = mysqli_fetch_assoc($a)) {
				?>
				<tr>
					<td><b>id</b></td>
					<td><input class="form-control" type="text" value="<?php echo $row['id'] ?>"></td>
				</tr>
				<tr>
					<td><b>name</b></td>
					<td><input type="text" class="form-control" value="<?php echo $row['name'] ?>"></td>
				</tr>
				<tr>
					<td><b>description</b></td>
					<td><input type="text" class="form-control" value="<?php echo $row['description'] ?>"></td>
				</tr>
				<tr>
					<td><b>salary</b></td>
					<td><input type="text" class="form-control" value="<?php echo $row['salary'] ?>"></td>
				</tr>
				<tr>
					<td><b>gender</b></td>
					<td><input type="text" class="form-control" value="<?php echo $row['gender'] ?>"></td>
				</tr>
				<tr>
					<td><b>birthday</b></td>
					<td><input type="text" class="form-control" value="<?php echo $row['birthday'] ?>"></td>
				</tr>
				<tr>
					<td><b>created_at</b></td>
					<td><input type="text" class="form-control" value="<?php echo $row['created_at'] ?>"></td>
				</tr>
			<?php } ?>
			</table>
			</form>
		</div>
	</div>
</div>