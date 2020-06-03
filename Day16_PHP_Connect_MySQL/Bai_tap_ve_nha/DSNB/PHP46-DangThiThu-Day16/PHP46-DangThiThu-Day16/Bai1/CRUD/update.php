<?php

session_start();

require_once 'database.php';
$error ='';
if (isset($_POST['submit'])){

 $name = $_POST['name'];
    if (empty($name)){
        $error = "Name không được để trống";
    }
}
$id = -1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql_select_one = "SELECT * FROM employees WHERE id = $id";
$result_one = mysqli_query($connection, $sql_select_one);

$employee = mysqli_fetch_assoc($result_one);

echo "<pre>";
print_r($employee);
echo "</pre>";

?>







<h3 style="color: red">
    <?php echo $error; ?>
</h3>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Bai1.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div class="container">
        <div class="content">
            <h2>Update Record</h2>

            <p>Please edit the input values and submit to update the reocord</p>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $employee['name']; ?>" class="form-control">
            <br>
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $employee['description']; ?></textarea>
            <br>
            <label>Salary</label>
            <input type="number" name="salary" value="<?php echo $employee['salary']; ?>" class="form-control">
            <br>
            <label>Gender</label>

            <br>
            <input type="radio" name="gender" value="0" <?php echo $employee['gender'] ?> > Male
            <input type="radio" name="gender" value="1"<?php echo $employee['gender'] ?> > Female

            <br>
            <label>Birthday</label>
            <input type="date" name="birthday" class="form-control"
                   value="<?php echo $employee['birthday'] ?>">
            <br>
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
            <a href="list.php" class="btn btn-light">Cancel</a>

        </div>
    </div>
</form>
</body>
</html>
