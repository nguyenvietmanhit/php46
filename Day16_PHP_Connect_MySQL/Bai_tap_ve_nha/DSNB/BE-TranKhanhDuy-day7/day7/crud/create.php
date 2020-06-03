<?php
session_start();
require_once 'database.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";
$error = '';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $des = $_POST['des'];
    $salary = $_POST['salary'];
    $gender = isset($_POST['gender'])?$_POST['gender']:'';
    $birthday = $_POST['birthday'];
    $date = date('yyyy-mm-dd',strtotime($birthday));
    if(empty($name)){
        $error = 'Name ko đc để trống';
    }
    if(empty($error)){
        $sql_insert = "INSERT INTO employees(`name`,`description`,`gender`,`salary`,`birthday`)
                        VALUES ('$name', '$des', $gender, $salary, $date)";
        $is_insert = mysqli_query($connection,$sql_insert);
        echo "<pre>";
        print_r($is_insert);
        echo "</pre>";
        if($is_insert){
            $_SESSION['success'] = "Thêm mới nhân viên thành công";
        }else{
            $_SESSION['error'] = "Thêm mới nhân viên thất bại";
        }
        header('Location: list.php');
        exit();
    }
}
?>
<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h3 style="color:red;"><?php echo $error ?></h3>
<div class="container">
    <h3>Create Record</h3>
    <form action="" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="des" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" value="" >
        </div>
        <div class="form-group">
            <h6>Gender</h6>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="0">
                <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"  value="1">
                <label class="form-check-label">Female</label>
            </div>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" name="birthday" value="" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit" >Save</button>
        <button type="reset" class="btn btn-outline-secondary" name="cancel">Cancel</button>
    </form>
</div>

</body>
</html>