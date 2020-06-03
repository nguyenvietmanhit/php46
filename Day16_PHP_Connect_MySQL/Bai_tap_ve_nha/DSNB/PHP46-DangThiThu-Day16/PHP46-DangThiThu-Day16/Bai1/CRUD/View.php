<?php

session_start();

require_once 'database.php';
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
<div class="container">
    <div class="content">
        <h2>View Reord</h2>
        <div class="form-group">
            <label>ID</label>
            <p><?php echo $employee['id']; ?></p>
        </div>
        <div class="form-group">
            <label>Name</label>
            <p><?php echo $employee['name']; ?></p>
        </div>
        <div class="form-group">
            <label>Description</label>
            <p><?php echo $employee['description']; ?></p>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <p><?php echo $employee['salary']; ?></p>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <p><?php
                $arr = array(
                    0 => "Male",
                    1 => "Female"
                );
                echo $arr[$employee['gender']];
                ?></p>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <p><?php
                $birthday = date('d-m-Y', strtotime($employee['birthday']));
                echo  $birthday;
                ?></p>
        </div>
        <div class="form-group">
            <label>Created_at</label>
            <p><?php
                $created_at = date('d-m-Y H:i:s', strtotime($employee['created_at']));
                echo $created_at;
                ?></p>
        </div>
        <p><a href="list.php" class="btn btn-primary">Back</a></p>

    </div>
</div>
</body>
</html>