<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai10</title>
</head>
<body>
<table border="1" width="270px" cellspacing="0" cellpadding="0" >
    <?php
    for ($i = 1; $i<=8; $i++){
        echo "<tr>";
        for ($j = 1; $j<=8; $j++){
            $num = $j + $i;
            if($num%2==0){
                echo "<td height='40px' width='40px' bgcolor='black'></td>";
            }
            else{
                echo "<td height='40px' width='40px' bgcolor='white'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>