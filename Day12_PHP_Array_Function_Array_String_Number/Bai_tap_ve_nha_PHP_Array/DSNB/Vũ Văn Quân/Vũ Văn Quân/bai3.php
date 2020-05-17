<?php

    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
    <table border="1" cellspacing="0">
        <tr>
            <th>Tên Khóa Học</th>
        </tr>
        <?php foreach($arrs as $value): ?>
        <tr>
            <td> <?php echo $value;  ?></td>
        </tr>
        <?php endforeach; ?>
    </table>