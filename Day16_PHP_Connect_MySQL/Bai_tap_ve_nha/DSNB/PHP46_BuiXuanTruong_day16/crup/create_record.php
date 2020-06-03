<?php
session_start();
require_once 'database_employee.php';
$error='';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $salary=$_POST['salary'];
    $gender=$_POST['gender'];
    $birthday=$_POST['birthday'];
    if(empty($_POST['name'])){
        $error="Name không được để trống";
    }
    else{
        $queryInsert="insert into employees( `name`, `description`, `gender`, `salary`, `birthday`)
 values ('$name','$description','$gender','$salary','$birthday')";
        $is_insert=mysqli_query($connection,$queryInsert);
        if ($is_insert) {
            $_SESSION['success'] = 'Thêm mới thành công nhân viên: '.$name;
            header('Location: list_emplouee.php');
            exit();
        } else {
            $_SESSION['error'] = 'Thêm mới thất bại';
        }

    }
    mysqli_close($connection);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Record</title>
</head>
<body>
<form action="#" method="post">
    <label>Name:<span style="color: red">*</span></label><br/>
    <input type="text" name="name" value=""/><br/>
    <label>Description:</label><br/>
    <input type="text" name="description" value=""/><br/>
    <label>Salary:</label><br/>
    <input type="number" name="salary" value=""/><br/>
    <label>Gender:</label><br/>
    <input type="checkbox" name="gender" value="1" checked="">Male
    <input type="checkbox" name="gender" value="2">Female<br/>
    <label>Birthday:</label><br/>
    <input type="date" name="birthday" value=""/><br/>
    <span style="color: red"><?php echo $error?></span><br/>
    <input type="submit" name="submit" value="Save"/>
    <input type="reset" name="resert" value="Cancel"/>



</form>

</body>
</html>
