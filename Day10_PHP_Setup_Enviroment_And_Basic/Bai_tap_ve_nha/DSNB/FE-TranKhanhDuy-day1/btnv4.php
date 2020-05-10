<!DOCTYPE hmtl>
<html>
<head>
    <title>Demo PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
$name = 'nguyen viet manh';
$email = 'nguyenvietmanhhit@gmail.com';
$phone = '098765xxxx';
$mess = 'this is message'
?>

<form id="form">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="name" placeholder="<?php echo $name?>">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $email ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Phone</label>
            <input type="text" class="form-control" id="phone" placeholder="<?php echo $phone ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="textarea" rows="3" placeholder="<?php echo $mess ?>"></textarea>
    </div>
    <button type="button" class="btn btn-warning" onclick="addSubmit()">submit</button>
</form>
<div id="result"></div>
    <script type="text/javascript">
        var info = [];
       function addSubmit(){
           var name = document.getElementById('name').value;
           var email = document.getElementById('email').value;
           var phone = document.getElementById('phone').value;
           var mess = document.getElementById('textarea').value;
           info.push(name,email,phone,mess);
           render()
       }
    function render() {
        var result = document.getElementById('result');
        var content = info.map(function (item) {
            return '<p>' + item +'</p>';

        })
        console.log(content);
        result.innerHTML = '';
        result.innerHTML = content.join('');
    }


    </script>
</body>
</html>