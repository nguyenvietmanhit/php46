<?php
    $n=isset($_POST["n"])?$_POST["n"]:"";
    for ($i=1; $i <= $n ; $i++) {
        for ($j=1; $j <= $i ; $j++) { 
            echo "* ";
        } 
        echo "<br>";
    }
    if ($n!="") {
        for ($i=$n-1; $i > 0 ; $i--) {
            for ($j=1; $j <= $i ; $j++) { 
                echo "* ";
            } 
            echo "<br>";
        }
    }
?>
<form action="" method="post">
    Nhap n=
    <input type="text" name="n">
    <input type="submit">
</form>