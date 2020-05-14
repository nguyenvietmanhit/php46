<html>
<head>
    <title>Bàn cờ vua</title>
    <meta charset="utf8">
</head>
<body>
<table style="width: 240px; height: 240px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    for($row=1; $row <= 8; $row++)
    {
        echo "<tr>";
        for($col=1; $col <=8; $col++)
        {
            $total=$row + $col;
            if($total%2 == 0)
            {
                echo "<td style='height=30px; width=30px; background-color: #ffffff'></td>";
            }
            else
            {
                echo "<td style='height=30px; width=30px; background-color: #000000'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>