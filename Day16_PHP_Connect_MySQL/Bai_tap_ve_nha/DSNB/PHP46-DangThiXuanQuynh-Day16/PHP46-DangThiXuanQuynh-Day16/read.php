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
</head>
<body>
<?php
//        print_r($_GET);
if(isset($_GET['submit'])){
    header("Location: list.php");
}
$detail_select ="SELECT * FROM employees WHERE id=".$_GET['id'];
$result_one =mysqli_query($con,$detail_select);
$detail=mysqli_fetch_assoc($result_one);
//print_r($detail);

?>
<div class="container">
    <h2>View Record</h2>
    <div class="form-group">
        <p class="font-weight-bold">ID</p>
        <p><?php echo $detail['id']?></p>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Name</p>
        <p><?php echo $detail['name']?></p>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Description</p>
        <p><?php echo $detail['description']?></p>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Salary</p>
        <p><?php
            switch ($detail['gender']){
                case 0: echo "Female"; break;
                case 1: echo "Male"; break;
            }
             ?>
        </p>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Gender</p>
        <p><?php echo $detail['salary']?>VND</p>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Birthday</p>
        <p><?php
            $birthday = date('d-m-Y',strtotime($detail['birthday']));
            echo $birthday ?>
        </p>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Created</p>
        <p><?php
            $created_at =date('d-m-Y H:i:s',strtotime($detail['created_at']));
            echo $created_at ?>
        </p>
    </div>
    <form action="">
        <input type="submit" value="Back" name="submit" class="btn btn-info">
    </form>
</div>
</body>
</html>
