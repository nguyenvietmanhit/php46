<link rel="stylesheet" href="css/bootstrap.css">
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>create nhan vien</h1>
			<form action="xulyadd.php" method="post" class="form-group">
				<table class="table">
					<tr style="border: none;">
						<td><b>Name</b><br><input type="text" name="text" value="" class="form-control"></td>
					</tr>
					<tr>
						<td>
							<b>description</b><br>
							<textarea class="form-control" name="description"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<b>salary</b><br>
							<input type="text" name="salary" value="" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							<b>gender</b><br>
							<input type="radio" name="radio">&nbsp;male&nbsp;&nbsp;&nbsp;<input type="radio" name="radio">&nbsp;female
						</td>
					</tr>
					<tr>
						<td>
							<b>birthday</b><br>
							<input type="date" name="day" value="" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="Save" class="btn btn-info"></input>
							<button type="reset" name="reset" class="btn btn-outline-info">cancel</button>
						</td>
					</tr>
				</table>
		</form>	
		</div>
	</div>
</div>