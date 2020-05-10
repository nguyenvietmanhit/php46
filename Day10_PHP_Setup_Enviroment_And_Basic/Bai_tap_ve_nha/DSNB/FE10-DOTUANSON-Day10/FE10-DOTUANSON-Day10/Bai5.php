<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 5</title>
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
</head>
<body>
<?php
    $hoTen="Nguyên Văn Mạnh";
    $email="ankhoainang@gmail.com";
    $phone="09060xxxxxx";
    $message="This is a message";
?>
<form method="post" action="Bai5.php" name="bang" >
    <div class="form-row">
        <div class="col-7">
            <label for="validationCustom01">Name*</label>
            <input type="text" class="form-control" placeholder="<?php echo $hoTen?>" id="name">
        </div>
        <div class="col">
            <label for="validationCustom01">Email*</label>
            <input type="text" class="form-control" placeholder="<?php echo $email?>" id="email">
        </div>
        <div class="col">
            <label for="validationCustom01">Phone</label>
            <input type="text" class="form-control" placeholder="<?php echo $phone?>" id="phone">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message *</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="<?php echo $message?>"></textarea>
    </div>
    <input type="submit" class="btn btn-warning" id="gui" value="Send message">

</form>
<h4 style="color: green" id="result"></h4>
<script type="text/javascript">
    var click_gui=function () {

        var name_obj=document.getElementById('name');
        var name=name_obj.value;
        var email_obj=document.getElementById('email');
        var email=email_obj.value;
        var phone_obj=document.getElementById('phone');
        var phone=phone_obj.value;

        var result_obj=document.getElementById('result');
        result_obj.innerHTML="Name: "+name+"<br>"+"Email: "+email+"<br>"+"Phone: "+phone;
        event.preventDefault();


    }
    document.getElementById('gui').onclick=click_gui;
</script>
</body>
</html>