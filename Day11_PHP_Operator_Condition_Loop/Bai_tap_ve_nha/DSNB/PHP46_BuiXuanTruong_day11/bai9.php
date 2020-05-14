<?php
function bangnhan($n){
    for($i=1; $i<=10; $i++){
        echo "$n x $i = ".($n*$i);
        echo "<br/>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bảng Cửu Chương</title>
    <meta charset="utf8">
    <style>
        th{
            color: red;
            background-color: #5bc0de;
        }
        td{
            padding: 1em;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" style="text-align: center; margin-left: 10em" >
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
    </tr>
    <tr>
        <td>
            <?php
            bangnhan(1);
            ?>
        </td>
        <td>
            <?php
            bangnhan(2);
            ?>
        </td>
        <td>
            <?php
            bangnhan(3);
            ?>
        </td>
        <td>
            <?php
            bangnhan(4);
            ?>
        </td>
        <td>
            <?php
            bangnhan(5);
            ?>
        </td>
    </tr>
    <tr>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <tr>
        <td>
            <?php
            bangnhan(6);
            ?>
        </td>
        <td>
            <?php
            bangnhan(7);
            ?>
        </td>
        <td>
            <?php
            bangnhan(8);
            ?>
        </td>
        <td>
            <?php
            bangnhan(9);
            ?>
        </td>
        <td>
            <?php
            bangnhan(10);
            ?>
        </td>
    </tr>
</table>
</body>
</html>
