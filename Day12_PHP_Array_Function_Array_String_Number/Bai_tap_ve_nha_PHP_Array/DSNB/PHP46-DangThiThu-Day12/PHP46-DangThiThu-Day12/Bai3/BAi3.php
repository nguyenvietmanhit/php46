<?php
$arrs =['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>Tên khóa học</th>
    </tr>

    <?php foreach ($arrs AS $value): ?>
    <tr>
        <td> <?php echo $value; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
