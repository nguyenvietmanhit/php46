<table cellpadding="0" cellspacing="0" border="1">
    <?php
    for($x = 1;$x <= 8;$x++){
        echo "<tr/>";
        for($y = 1;$y <= 8;$y++){
            $total = $x + $y;
            if($total % 2 == 0){
                echo "<td style='height: 30px;width: 30px;background: black'/>";
            }else{
                echo "<td style='height: 30px;width: 30px;background: white'/>";
            }
        }
        echo "<tr/>";
    }
    ?>
</table>