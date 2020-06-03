<?php
session_start();
require_once 'connection.php';

if(isset($_POST['save'])){
    $error='';
    $name=$_POST['ten'];
    $description=$_POST['description'];
    $salary=$_POST['salary'];
    $gender=true;
    if ($_POST['gender']==2){
        $gender=false;
    }
    $birthday=date("Y-m-d",strtotime($_POST['birthday']));
    if(empty($name)){
        $error="Không được để trống tên";
    }
//    echo "<pre>";
//    print_r($gender);
//    echo "</pre>";
//    die();
    if (empty($error)){
        $query_insert="INSERT INTO nhanvien_tb(`name`,`desciption`,`salary`,`gender`,`birtday`) 
VALUES('$name','$description','$salary','$gender','$birthday') ";
        $is_insert=mysqli_query($connection,$query_insert);
        if ($is_insert){
            $_SESSION['success']="Insert thành công";
        }else{
            $_SESSION['error']='Insert thất bại';
        }
        header('Location:list.php');
        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="width: 80%;margin-left: auto;margin-right: auto">
<h1>Create Record</h1>
<form action="" method="post">
    <div class="form-group">
        <label>Name *</label>
        <input type="text" class="form-control" id="name" name="ten">
        <p style="color: red"><?php echo (!empty($error))?$error:''?></p>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="number" class="form-control"  name="salary">
    </div>
    <div class="form-group">
        <label>Gender</label><br/>
        <input type="radio" value="1"   name="gender"> Male
        <input type="radio" value="2"  name="gender"> Female
    </div>
    <div class="form-group">
        <label>Birthday</label>
        <input type="text" class="form-control"  name="birthday" placeholder="mm-dd-yy">
        <p></p>
    </div>
    <button type="submit" class="btn btn-primary" name="save">Save</button>
    <button type="submit" class="btn btn-primary" name="cancel"><a style="color: white" href="list.php">Cancel</a></button>
</form>
</body>
</html>
