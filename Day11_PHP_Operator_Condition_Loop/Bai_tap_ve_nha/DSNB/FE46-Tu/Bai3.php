<?php
$h=isset($_GET["h"])?$_GET["h"]:"";

$s="";
$cv="";
$r="3.14";
if ($h!="") {
    $cv=$h*2*$r;
    $s=$h*$h*$r;
}
?>
<fieldset>
    <legend>Input</legend>
    <form action="" method="get">
        Bán Kính Hình Tròn: <input type="number" name="h">
        <div><input type="submit"></div>
        <div id="result"></div>
    </form>
    <?php if($h!=""): ?> <div>Bán Kính Hình Tròn: <?= $h; ?></div> <?php endif;?>
    <?php if($s!=""): ?> <div>Diện tích: <?= $s; ?></div> <?php endif; ?>
    <?php if($cv!=""): ?> <div>chu vi: <?= $cv; ?></div> <?php endif; ?>
</fieldset>