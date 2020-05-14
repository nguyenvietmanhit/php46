<?php
    $n=isset($_POST["n"])?$_POST["n"]:"";
    for ($i=1; $i <$n ; $i++) { 
        echo "$i-";
    }
    echo $n;
?>
<form action="" method="post">
    Nhap n=
    <input type="text" name="n">
    <input type="submit">
</form>