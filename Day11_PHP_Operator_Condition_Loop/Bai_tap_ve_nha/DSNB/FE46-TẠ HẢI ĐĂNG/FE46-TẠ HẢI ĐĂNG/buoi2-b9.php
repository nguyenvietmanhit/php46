<?php
    $n=isset($_POST["n"])?$_POST["n"]:"";
?>
<style type="text/css">
    table{
        margin: auto;
        text-align: center;
    }
</style>
<form action="" method="post">
    Nhap n=
    <input type="text" name="n">
    <input type="submit">
</form>
<table border="1">
    <?php 
        for ($i=1; $i<=$n; $i++):
            if (($i-1)%5==0) echo "<tr>"
    ?>
    <td>
        <?php 
            for ($j=1;$j<=10;$j++)
                {
                    $s=$i*$j;
                    echo "$i x $j = $s";
                    echo "<br>";
                }
        ?>
    </td>
            <?php endfor; ?>
</table>