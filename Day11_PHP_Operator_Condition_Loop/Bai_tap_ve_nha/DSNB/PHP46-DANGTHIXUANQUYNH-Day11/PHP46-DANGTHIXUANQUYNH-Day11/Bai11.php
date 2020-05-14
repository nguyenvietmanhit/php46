<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 11</title>
    <style>
        span {
            padding: 15px;
            border: 1px solid black;
            width: 15px;
            height: 15px;
            display: inline-block;
        }
        .nt{
            background:#9CD43E;
        }
        table{
            border:1px solid black;
            margin:0 auto;
        }
        td{
            padding:15px;
            text-align:center;
        }
    </style>
</head>
<body>
<div>
    <?php
    function Math($n){
        if($n<2){
            return false;
        }
        for($i=2;$i<=sqrt($n);$i++){
            if($n%$i ==0){
                return false;
            }
        }
        return true;
    }

    function result($n){
        for($i=1;$i<=$n;$i++){
            if(Math($i) ){
                echo "<span class=nt>$i</span>";
            }
            if($i == Math($i)){
                continue;
            }
            echo "<span>$i</span>" ;
            if($i%10 ==0){
                echo "<br>";
            }
        }
    }

    result(100);
    ?>
</div>
<table border="1" cellspacing="0">
    <?php
    function Maths($n){
        if($n<2){
            return false;
        }
        for($i=2;$i<=sqrt($n);$i++){
            if($n%$i == 0){
                return false;
            }
        }
        return true;
    }
    function Results($n){
        echo"<tr>";
        for($i=1;$i<=$n;$i++){
            if(Math($i)){
                echo "<td class='nt'>$i</td>";
            }
            if(Math($i)==$i){
                continue;
            }
            echo "<td>$i</td>";
            if($i%10 ==0){
                echo "</tr>";
            }
        }

    }
    Results(100);
    ?>
</table>
</body>
</html>


