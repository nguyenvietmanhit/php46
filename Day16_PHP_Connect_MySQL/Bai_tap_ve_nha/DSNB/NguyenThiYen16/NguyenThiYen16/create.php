<?php
    session_start();
    require_once 'database.php';
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
    $error = '';
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $des = $_POST['des'];
        $salary = $_POST['salary'];
        $gender = isset($_POST['gender']) ? $_POST['gender']: '';
        $birthday = $_POST['birthday'];
        if (empty($name)){
            $error = 'Name không được để trống';
        }
        if (empty($error)){
            $sql_insert = "INSERT INTO employees(`name`, `description`, `gender`, `salary`, `birthday`) VALUE ('$name', '$des', '$gender', '$salary', '$$birthday')";
            $is_insert = mysqli_query($connection, $sql_insert);
            if ($is_insert){
                $_SESSION['success'] = 'Thêm mới thành côngo';
            }
            else{
                $_SESSION['error'] = 'Thêm mới thất bại';
            }
            header('Location: list.php');
            exit();
        }
    }
?>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<form action="" method="post">
    Name <br>
    <input type="text" name="name" value="">
    <br>
    Description <br>
    <textarea name="des"></textarea>
    <br>
    Salary <br>
    <input type="number" name="salary" value="">
    <br>
    Gender
    <input type="radio" name="gender" value="0">Male
    <input type="radio" name="gender" value="1">Female
    <br>
    Birthday
    <input type="date" name="birthday" value="">
    <br>
    <input type="submit" name="submit" style="margin-top: 10px" value="Save">
    <input type="reset" name="reset" value="Cancel">
</form>
