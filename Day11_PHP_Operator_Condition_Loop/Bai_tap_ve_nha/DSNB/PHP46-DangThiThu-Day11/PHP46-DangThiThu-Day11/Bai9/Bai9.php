<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai9</title>
</head>
<body>
<table border="1">
    <tr bgcolor="#afeeee"; style="color: red">
        <?php
        for ($i=1; $i<=10; $i++){
            echo "<th>$i</th>";
        }
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 1; $i<=10; $i++){
            echo "<td>";
            for ($j = 1; $j<=10; $j++){
                echo "$i x $j = " . ($i * $j);
                echo "<br>";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>