<table border="1" style="text-align: center">
    <?php

    for($x = 1;$x <= 100;$x++) {
        if ($x % 10 == 1) {
            echo "<tr/>";
        }
        $mm = 0;

        for($j = 2; $j <= $x/2; $j++) {
            if ($x % $j == 0) {
                $mm++;
                break;
            }
        }
        if ($mm == 0&$x != 1) {
            echo "<td style='background:greenyellow ;color: black'/>".$x."</td>";
        }else{
            echo "<td style='border: 1px solid'/>".$x."</td>";
        }
    }
    ?>
</table>


