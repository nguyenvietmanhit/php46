<?php
//session_start();
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <style>
        label{
            font-weight:bold;
        }
    </style>
</head>
<body>
<?php

require_once 'database.php';
$error='';
if(isset($_GET['submit'])){
    $name =$_GET['name'];
    $description=$_GET['description'];
    $salary =$_GET['salary'];
    $gender= isset($_GET['gender'])?$_GET['gender']:'';
    $birthday =$_GET['birthday'];
    if(empty($name)){
        $error='Name không được để trống';
    }
    else{
        $sql_insert="INSERT INTO employees(`name`,`description`,`gender`,`salary`,`birthday`) values('$name','$description','$gender',$salary,'$birthday') ";
        $is_insert=mysqli_query($con,$sql_insert);
        if($is_insert){
            $_SESSION['success']='Thêm mới nhân viên thành công';
        }
        else{
            $_SESSION['error']='Thêm mới thất bại';
        }

        header('Location: list.php');
        exit();
    }
}
if(isset($_GET['cancel'])){
    header('Location: list.php');
    exit();
}
?>
<div class="container">
    <h2>Create Record</h2>
    <hr>
    <form action="" method="get">
       <div class="form-group">
           <label for="">Name <span style="color:red">*</span></label>
           <input type="text" name="name" class="form-control" value="<?php echo isset($_GET['name'])?$_GET['name']:''?>">
           <span style="color:red"><?php echo $error?></span>
       </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Salary</label>
            <input type="number" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Gender</label><br>
            <input type="radio" name="gender" value="1">Male
            <input type="radio" name="gender" value="0">Female
        </div>
        <div class="form-group">
            <label for="">Birthday</label>
            <input type="date" name="birthday" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-info">
            <input type="submit" name="cancel" value="Cancel" class="btn">
        </div>
    </form>
</div>
</body>
</html>
