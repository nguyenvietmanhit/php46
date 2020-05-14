<?php
    function snt($n) {
        if ($n<2) return false;
        for ($i=2; $i<$n; $i++)
            if ($n % $i == 0) {
                return false;
            }
        return true;
    }
?>
<style type="text/css">
    table{
        border-collapse: collapse;
    }
    td{
        width: 50px;
        height: 50px;
        text-align: center;
    }
    .xanh{
        background: green;
    }
</style>
<table border="1">
    <?php 
        for ($i=1;$i<=100;$i++): 
            if (($i-1) % 10 ==0) echo "<tr>";
    ?>
    <td  <?php if (snt($i)): ?> class="xanh" <?php endif;?>><?= $i ?></td>
        <?php endfor; ?>
</table>