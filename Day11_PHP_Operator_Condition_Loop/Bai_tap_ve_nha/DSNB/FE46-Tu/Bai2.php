<?php
$h=isset($_GET["h"])?$_GET["h"]:"";

$s="";
$cv="";
if ($h!="") {
    $s=$h*$h;
    $cv=$h*4;
}
?>
<fieldset>
    <legend>Input</legend>
    <form action="" method="get">
        Nhập cạnh hình vuông: <input type="number" name="h">
        <div><input type="submit"></div>
        <div id="result"></div>
    </form>
    <?php if($h!=""): ?> <div>cạnh hình vuông: <?= $h; ?></div> <?php endif;?>
    <?php if($s!=""): ?> <div>Diện tích: <?= $s; ?></div> <?php endif; ?>
    <?php if($cv!=""): ?> <div>chu vi: <?= $cv; ?></div> <?php endif; ?>
</fieldset>