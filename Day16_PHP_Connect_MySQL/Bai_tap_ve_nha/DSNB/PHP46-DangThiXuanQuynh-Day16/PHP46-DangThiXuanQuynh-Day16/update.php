<?php
session_start();
require_once 'database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        label{
            font-weight:bold;
        }
    </style>
</head>
<body>
<?php
$error = '';
$id=$_GET['id'];
if(!isset($id)){
    $_SESSION['error']='ID khong hop le';
    header('Location: list.php');
    exit();
}
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $description = $_GET['description'];
    $gender = isset($_GET['gender']);
    $salary = $_GET['salary'];
    $birthday = $_GET['birthday'];

    if (empty($name)) {
        $error = 'Name không được để trống';
    }
    else {
        $sql = "UPDATE employees SET `name`='$name',`description`='$description',`gender`='$gender',`salary`='$salary',`birthday`='$birthday' WHERE `id`=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            $_SESSION['success']="Update id=$id nhân viên thành công";
        }else{
            $_SESSION['error']="Update id=$id thất bại";
        }
        header('Location: list.php');
        exit();
    }

}
if (isset($_GET['cancel'])) {
    header('Location: list.php');
    exit();
}
if($id){
$sql = "SELECT * FROM employees WHERE id=$id"  ;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <h2>Update Record</h2>
    <hr>
    <p>Please edit the inputvalues àn submit to update the record</p>
    <form action=""<?php echo $row['id'] ?> method="get">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
            <span style="color:red"><?php echo $error ?></span>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control"><?php echo $row['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Salary</label>
            <input type="number" name="salary" class="form-control" value="<?php echo $row['salary'] ?>">
        </div>
        <div class="form-group">
            <?php
            $male = '';
            $female = '';
            switch ($row['gender']) {
                case 0:
                    $female = 'checked';
                    break;
                case 1:
                    $male = 'checked';
                    break;
            }
            ?>
            <label for="">Gender</label><br>
            <input type="radio" name="gender" value="1" <?php echo $male ?>>Male
            <input type="radio" name="gender" value="0" <?php echo $female ?>>Female
        </div>
        <div class="form-group">
            <label for="">Birthday</label>
            <input type="date" name="birthday" class="form-control" value="<?php echo $row['birthday'] ?>">
        </div>
        <?php
        }
        ?>
        <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-info">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <input type="submit" name="cancel" value="Cancel" class="btn  border-dark">
        </div>

    </form>
</div>
</body>
</html>
