<?php 
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1">
    <?php foreach ($arrs as $value): ?>
    <tr><td><?= $value; ?></td></tr>
    <?php endforeach; ?>
</table>