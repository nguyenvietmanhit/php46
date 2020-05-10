<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai 05</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style type="text/css">
        .container{
            background:#F8F9FA;
            margin-top:50px;
            padding:20px;
        }
        #result{
            display:none;
        }
    </style>
</head>
<body>
<?php //require "save.php"?>
<div class="container">
    <form onsubmit="return submitHandler()">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fname">Name*</label>
                    <input type="text" id="fname" class="form-control" name="fullname" placeholder="<?php echo $name ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="<?php echo $email ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usrtel">Phone*</label>
                    <input type="tel" id="usrtel" class="form-control" name="usrtel" placeholder="<?php echo $phone ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="message">Message*</label>
            <textarea name="message" placeholder="<?php echo $message ?>" class="form-control" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" id="submit" class="btn btn-warning" value="Send message">
            <br>
            <span>*There fields are requires.</span>
        </div>
        <div id="result" class="text-primary">
            <p class="text-primary" id="resultName">Name: </p>
            <p class="text-primary" id="resultEmail">Email:</p>
            <p class="text-primary" id="resultUsrtel">Phone:</p>
            <p class="text-primary" id="resultMessage">Message:</p>
        </div>
    </form>

</div>
<script>
    function submitHandler(){
        var fname = document.getElementById("fname");
        var email =document.getElementById("email");
        var usrtel =document.getElementById("usrtel");
        var message =document.getElementById("message");
        var result =document.getElementById("result");
        var resultName =document.getElementById("resultName");
        var resultEmail =document.getElementById("resultEmail");
        var resultUsrtel =document.getElementById("resultUsrtel");
        var resultMessage =document.getElementById("resultMessage");
        result.style.display ="block";
        if(fname.value ==""){
            resultName.innerHTML +="<?php echo $name?>";

        }else{
            resultName.innerHTML += fname.value;
        }
        if(email.value==""){
            resultEmail.innerHTML +=" <?php echo $email ?>";
        }else{
            resultEmail.innerHTML +=email.value;
        }
        if(usrtel.value ==""){
            resultUsrtel.innerHTML +=" <?php echo $phone ?>";
        }else{
            resultUsrtel.innerHTML +=usrtel.value;
        }
        if(message.value ==""){
            resultMessage.innerHTML +=" <?php echo $message ?>";
        }
        else{
            resultMessage.innerHTML +=message.value;
        }
        return false;
    }
</script>

</body>
</html>