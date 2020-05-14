<?php
    $s=0;
    $n=isset($_POST["n"])?$_POST["n"]:"";
    for ($i=1; $i <= $n ; $i++) { 
        $s=$s+1/$i;
    }
    echo $s;
?>
<form action="" method="post">
    Nhap n=
    <input type="text" name="n">
    <input type="submit">
</form>