<?php
//views/students/index.php
//echo "<pre>";
//print_r($students);
//echo "</pre>";
?>
<a href="index.php?controller=student&action=create">
    Add
</a>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Created_at</th>
        <th></th>
    </tr>
    <?php if (empty($students)): ?>
        <tr>
            <td colspan="5">No data</td>
        </tr>
    <?php else: ?>
        <?php foreach($students AS $student):?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['created_at']; ?></td>
            <td>
                <?php
                //tạo ra các link View, Update, Delete
                //url bắt buộc phải theo format của mô hình mvc
                $link_view = 'index.php?controller=student&action=view&id='
                    . $student['id'];
                $link_update = 'index.php?controller=student&action=update&id='
                . $student['id'];
                $link_delete = 'index.php?controller=student&action=delete&id='
                . $student['id'];
                ?>
                <a href="<?php echo $link_view; ?>">View</a>
                <a href="<?php echo  $link_update; ?>">Update</a>
                <a href="<?php echo $link_delete; ?>"
                   onclick="return confirm('Muốn xóa hả?')">
                    Delete
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
