<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php
        foreach ($arrs as $value):
    ?>
    <tr>
        <td><?php echo $value ?></td>
    </tr>
    <?php
        endforeach;
    ?>
</table>
