<?php
session_start();
require_once 'connection.php';
$query_insert_one="Select * from nhanvien_tb where id=".$_GET['id'];
$resutl=mysqli_query($connection,$query_insert_one);
$nhanvien=mysqli_fetch_assoc($resutl);
if (isset($_POST['update'])){
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
    if(empty($error)){
        $query_update="Update nhanvien_tb set
        `name`='{$name}',
        desciption='{$description}',
        salary='{$salary}',
        gender='{$gender}',
        birtday='{$birthday}' where id=".$_GET['id'];
        $is_update=mysqli_query($connection,$query_update);
        if($is_update){
            $_SESSION['updatedone']="update thành công";
        }else{
            $_SESSION['updatednt']="update thất bại";
        }
        header("Location:list.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="width: 80%;margin-left: auto;margin-right: auto">
<h1>Create Record</h1>
<form action="" method="post">
    <div class="form-group">
        <label>Name *</label>
        <input type="text" class="form-control" id="name" name="ten" value="<?php echo $nhanvien['name']?>">
        <p style="color: red"><?php if(!empty($error)) echo $error?></p>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description"><?php echo $nhanvien['desciption']?></textarea>
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="number" class="form-control"  name="salary" value="<?php echo $nhanvien['salary']?>">
    </div>
    <div class="form-group">
        <label>Gender</label><br/>
        <input type="radio" value="1" <?php if ($nhanvien['gender']==1) echo 'checked="checked"'?> name="gender"> Male
        <input type="radio" value="2"  <?php if ($nhanvien['gender']==0) echo 'checked="checked"'?>  name="gender"> Female
    </div>
    <div class="form-group">
        <label>Birthday</label>
        <input type="text" class="form-control" value="<?php echo date('d-m-Y',strtotime($nhanvien['birtday']))?>"  name="birthday" placeholder="mm-dd-yy">
        <p></p>
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
    <button type="submit" class="btn btn-primary" name="cancel"><a href="list.php"style="color: white">Cancel</a></button>
</form>
</body>
</html>
