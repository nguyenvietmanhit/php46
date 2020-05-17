<?php
    $arr=['PHP','HTML','JS','CSS']
?>
<table border="1" cellspacing="0">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php
        foreach ($arr as $value):
    ?>
    <tr>
        <td><?php echo $value?></td>
    </tr>
    <?php endforeach; ?>
</table>
