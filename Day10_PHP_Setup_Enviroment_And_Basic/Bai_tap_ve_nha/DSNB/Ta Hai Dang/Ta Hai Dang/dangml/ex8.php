<?php
    $h=isset($_GET["h"])?$_GET["h"]:"";
    $w=isset($_GET["w"])?$_GET["w"]:"";
    $s="";
    $cv="";
    if ($h!=""&&$w!="") {
        $s=$h*$w;
        $cv=($h+$w)*2;
    }
?>
<fieldset>
    <legend>Input</legend>
    <form action="" method="get">
        Nhập chiều dài: <input type="number" name="h">m và chiều rộng: <input type="number" name="w">m
        <div><input type="submit"></div>
        <div id="result"></div>
    </form>
<?php if($h!=""): ?> <div>chiều dài: <?= $h; ?></div> <?php endif;?>
<?php if($w!=""): ?> <div>chiều rộng: <?= $w; ?></div> <?php endif?>
<?php if($s!=""): ?> <div>Diện tích: <?= $s; ?></div> <?php endif; ?>
<?php if($cv!=""): ?> <div>chu vi: <?= $cv; ?></div> <?php endif; ?>
</fieldset>