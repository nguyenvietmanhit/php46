<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 09</title>
    <style>
        th{
            background:#CDFFFF;
            color:red;
        }
        td,th{
            padding:10px;
        }
        table,td,th{
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<table cellspacing="1">
    <?php
function math($n){
    for($i=$n;$i<=$n;$i++){
        for($j=1;$j<=10;$j++){
            echo"$i x $j = ". $i*$j ."<br>";
        }
        echo " <br> ";

    }
}

?>
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <tr>
        <td><?php math(1) ?></td>
        <td><?php math(2) ?></td>
        <td><?php math(3) ?></td>
        <td><?php math(4)?></td>
        <td><?php math(5) ?></td>
        <td><?php math(6)?></td>
        <td><?php math(7) ?></td>
        <td><?php math(8)?></td>
        <td><?php math(9) ?></td>
        <td><?php math(10)?></td>
    </tr>
</table>
</body>
</html>