<?php
    session_start();
    require_once 'database.php';
    if (isset($_GET["id"])){
        $sql_view_one = "SELECT * FROM employees WHERE id = 1";
        $result_one = mysqli_query($connection, $sql_view_one);
        $employees = [];
        $employees = mysqli_fetch_assoc($result_one);
    }
    echo "<pre>";
    print_r($employees);
    echo "</pre>";
?>
<form action="" method="post">
    ID <br>
    <input type="number" name="id" value="<?php echo $employees['id']?>">
    <br>
    Name <br>
    <input type="text" name="name" value="<?php echo $employees['name']?>">
    <br>
    Description <br>
    <textarea name="description"><?php echo $employees['description']?></textarea>
    <br>
    Salary <br>
    <input type="number" name="salary" value="<?php echo $employees['salary']?>">
    <br>
    Gender <br>
    <input type="text" name="gender" value="<?php echo $employees['gender']?>">
    <br>
    Birthday <br>
    <input type="date" name=" birthday" value="<?php echo $employees['birthday']?>">
    <br>
    Created_at <br>
    <input type="date" name="created_at" value="<?php echo $employees['created_at']?>">
    <br>
    <input type="submit" name="submit" style="margin-top: 20px;" value="Back">
</form>
