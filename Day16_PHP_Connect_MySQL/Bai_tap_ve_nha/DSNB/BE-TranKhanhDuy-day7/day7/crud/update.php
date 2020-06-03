<?php
session_start();
require_once 'database.php';
$id = -1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql_select_one = "SELECT * FROM employees WHERE id = $id";
$result_one = mysqli_query($connection,$sql_select_one);
$employes = mysqli_fetch_assoc($result_one);
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
    $sql_update =
        "UPDATE employees
 SET `name` = '$name',`description` = '$des',`salary` = $salary,`gender` = $gender,`birthday` = $date  WHERE id = $id";
    $is_update = mysqli_query($connection, $sql_update);
    if ($is_update) {
        $_SESSION['success1'] = 'Update thành công';
    } else {
        $_SESSION['error1'] = 'Update thất bại';
    }
    header('Location: list.php');
    exit();
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

<div class="container">
    <h3>Update Record</h3>
    <h3 style="color:red;"><?php echo $error ?></h3>
    <form action="" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $employes['name'];?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="des" rows="3"><?php echo $employes['description'];?></textarea>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $employes['salary'];?>" >
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
            <input type="date" class="form-control" name="birthday" value="<?php echo $employes['birthday'];?>" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit" >Save</button>
        <button type="reset" class="btn btn-outline-secondary" name="cancel">Cancel</button>
    </form>
</div>
</body>
</html>