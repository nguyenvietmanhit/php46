<?php
    $n=isset($_POST["n"])?$_POST["n"]:"";
?>
<style type="text/css">
    table{
        margin: auto;
        text-align: center;
        border-collapse: collapse;
    }
    .den{
        width: 50px;
        height: 50px;
        background: black;
    }
    .trang{
        width: 50px;
        height: 50px;
    }
</style>
<table border="1">
    <?php 
        for ($i=1; $i<=8; $i++):
    ?>
    <tr>
        <?php 
            for ($j=1;$j<=8;$j++)
            if ($i % 2==1) {
                if ($j % 2==1) echo "<td class='den'></td>";
                else echo "<td class='trang'></td>";
            }
            else {
                if ($j % 2==1) echo "<td class='trang'></td>";
                else echo "<td class='den'></td>";
            }
        ?>
    </tr>
            <?php endfor; ?>
</table>