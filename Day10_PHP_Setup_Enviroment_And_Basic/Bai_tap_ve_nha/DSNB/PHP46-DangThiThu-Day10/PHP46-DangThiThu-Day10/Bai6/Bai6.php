<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Bai6.css">
    <title>Bài6</title>
</head>
<body>
<?php
$name = "Dang Thi Thu";
$age = 28;


    echo "

    <div class='container' >
    <h5>Form căn bản</h5>
    <form action='#' method='post' id='form'>

            <div>
                <label>Name*</label>
                <input type='text' id='name' class='form-control' value='$name'  >
            </div>
            
            <div>
                <label>Age</label>
                <input type='text' id='age' class='form-control' value='$age'  >
            </div>
       

        <div>
            <label >Quê quán</label>
            <textarea class='form-control'></textarea>
        </div>
      
    
        <span>Ảnh đại diện</span>
        <div class='file'>
			<input type='file' class='form-control' >
		</div>
        
        
        <input type='submit' id='sub' class='btn-lg form-control'><br>
        
        
        
    </form>

</div>
    
    ";
?>
<script language='JavaScript'>
    var greet = document.getElementById("sub");
    greet.onclick = function(){
        alert("Arigato sensei Mạnh");
    }
</script>

</body>
</html>