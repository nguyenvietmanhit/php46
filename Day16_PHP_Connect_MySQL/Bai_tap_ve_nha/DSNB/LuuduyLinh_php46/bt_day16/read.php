<?php
require_once 'connection.php';
$query_insert_one="Select * from nhanvien_tb where id=".$_GET['id'];
$resutl=mysqli_query($connection,$query_insert_one);
$nhanvien=mysqli_fetch_assoc($resutl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="width: 80%;margin-right: auto;margin-left: auto">

<h1>View Record</h1>
    <p>Id : <?php echo $nhanvien['id']?> </p>
    <p>Name : <?php echo $nhanvien['name']?></p>
    <p>Description : <?php echo $nhanvien['desciption']?></p>
    <p>Salary : <?php echo $nhanvien['salary']?></p>
    <p>Gender :
        <?php
            if($nhanvien['gender']==0){
                echo "female";
            }
            else{
                echo "male";
            }
        ?></p>
    <p>Birthday : <?php echo date("d-m-Y H:i:m",strtotime($nhanvien['birtday']))?></p>
    <p>Created_at : <?php echo date("d-m-Y H:i:m",strtotime($nhanvien['created_at']))?></p>
    <button type="button" class="btn btn-primary"><a href="list.php" style="color: white">Back</a></button>

</body>
</html>
