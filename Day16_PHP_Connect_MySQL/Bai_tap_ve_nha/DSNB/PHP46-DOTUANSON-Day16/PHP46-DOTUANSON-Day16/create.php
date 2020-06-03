<?php
    session_start();
    require_once 'database1.php';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $error='';
    if (isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $description=$_POST['description'];
        $salary=$_POST['salary'];
        $date=$_POST['date'];
        $gender="";
        if(isset($_POST['gender']))
        {
            switch ($_POST['gender']){
                case 0: $gender="FEMALE"; break;
                case 1: $gender="MALE";break;
            }
        }
        if (empty($name))
            $error="KHONG DUOC DE TRONG";
        if (empty($error))
        {
            $sql_insert="INSERT INTO nhanvien(`name`,`description`,`salary`,`gender`,`birthday`)
                          VALUES ('$name','$description','$salary','$gender','$date')";
            $is_insert=mysqli_query($connection,$sql_insert);
            if ($is_insert)
            {
                $_SESSION['success']="THEM MOI THANH CONG";
            }
            else
                $_SESSION['error']="THEM MOI THAT BAI";
            header('Location:list1.php');
            exit();
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QLNHAN VIEN</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css" type="text/css">
</head>
<body>
<form action=""method="post">
    <div class="form-group">
        <label for="exampleInputEmail1"><b>NAME</b></label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        <label for="exampleFormControlTextarea1"><b>DESCRIPTION</b></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        <label for="exampleInputEmail1"><b>SALARY</b></label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="salary">
        <b>GENDER</b><BR>
        <input type="radio" name="gender"value="0">MALE
        <input type="radio" name="gender" value="1">FEMALE<br>
        <b>BIRTHDAY</b><BR>
        <input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm//dd/yyyy" name="date">

    </div>


    <button type="submit" class="btn btn-primary" NAME="submit">SAVE</button>
    <button type="reset" class="btn btn-primary" >CANCE</button>
</form>
</body>
</html>
