<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 10</title>
    <style type="text/css">
        div{
            margin:50px;
        }

        .cl1{
            width:20px;
            height:20px;
            display:inline-block;
            padding:5px;
            background:white;
            border:1px solid #ccc;
            margin-top:-5px;

        }
        .cl1:nth-child(even){background:black;}
        .bg-black{
            background:black;
        }
        td{
            width:20px;
            height:20px;
        }
    </style>
</head>
<body>
<?php
function square($n){
    for($i=1;$i<=$n;$i++){
        for($j=1;$j <= 8;$j++){
            echo"<span class='cl1'></span>";
        }
        echo "<br>";
    }
}
?>
<div>
<?php square(8)?>
</div>
<table border="1" cellspacing="0">
        <?php
        function table($n){
            for($i=1;$i<=$n;$i++){
                echo"<tr>";
                for($j=1;$j<=$n;$j++){
                    $sum =$i+$j;
                    if($sum%2==0){
                        echo "<td class='bg-white'></td>";
                    }
                    else{
                        echo "<td class='bg-black'></td>";
                    }
                }
                echo"</tr>";
            }
        }
        table(8);
        ?>
</table>
</body>
</html>


