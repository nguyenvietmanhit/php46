<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Bai5.css">
    <title>Bài9</title>
</head>
<body>
<?php
$name = "Dang Thi Thu";
$email = "danthithu123@gmail.com";
$phone = "098768xxx";
$mes ="This is message";

    echo "

    <div class='container' >
    <h5>Form căn bản</h5>
    <form action='#' method='post' id='form'>

        <div class='row'>
            <div class='col-md-4'>
                <label>Name*</label>
                <input type='text' id='name' class='form-control' placeholder='$name'>
            </div>
            <div class='col-md-4'>
                <label>Email*</label>
                <input type='email' id='email' class='form-control' placeholder='$email'>
            </div>
            <div class='col-md-4'>
                <label>Phone*</label>
                <input type='number' id='phone' class='form-control' placeholder='$phone'>
            </div>
        </div>
       

        <div>
            <label >Message*</label>
            <textarea class='form-control' placeholder='$mes'></textarea>
        </div>
        
        
        <input type='submit' id='sub' class='btn btn-warning btn-lg'><br>
        <span>*These filed are required</span>
        
        <p id='save'></p>
        
        
    </form>

</div>
    
    ";
?>
<script type="text/javascript" src="Bai5.js"></script>

</body>
</html>