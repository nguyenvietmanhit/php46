<html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai9</title>
    <link rel="stylesheet" type="text/css" href="bai9.css">
</head>
<body>
<?php
    function tinh($n)
    {
        for($i=1;$i<10;$i++)
        {   $tich=$n*$i;
            echo "$n*$i=$tich";
            echo "<br/>";
        }
    }

?>
<form method="post" action="Bai9.php">
    <table border="1">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>

        </tr>
        <tr>
            <td><?php
                tinh(1);
                ?></td>
            <td><?php
                tinh(2);
                ?></td>
            <td><?php
                tinh(3);
                ?></td>
            <td><?php
                tinh(4);
                ?></td>
            <td><?php
                tinh(5);
                ?></td>
        </tr>
        <tr>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>

        </tr>
        <tr>
            <td><?php
                tinh(6);
                ?></td>
            <td><?php
                tinh(7);
                ?></td>
            <td><?php
                tinh(8);
                ?></td>
            <td><?php
                tinh(9);
                ?></td>

        </tr>
    </table>
</form>
</body>
</html>