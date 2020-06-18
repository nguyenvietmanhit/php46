<?php
//echo "<pre>";
//print_r($categories);
//echo "</pre>";
?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Description</th>
        <th>Status</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th></th>
    </tr>
    <?php foreach($categories AS $category): ?>
    <tr>
        <td><?php echo $category['id']; ?></td>
        <td><?php echo $category['name']; ?></td>
        <td>
            <?php if (!empty($category['avatar'])): ?>
            <img src="assets/uploads/<?php echo $category['avatar']?>" />
            <?php endif; ?>
        </td>
        <td><?php echo $category['description']; ?></td>
        <td>
            <?php
            $status_text = '';
            switch ($category['status']) {
                case 0: $status_text = 'Disabled';break;
                case 1: $status_text = 'Active';break;
            }
            echo $status_text;
            ?>
        </td>
        <td><?php echo $category['created_at']?></td>
        <td><?php echo $category['updated_at']?></td>
        <td>
            <?php
    $link_update = 'index.php
    ?controller=category&action=update&id=' . $category['id'];
    $link_delete = 'index.php
    ?controller=category&action=delete&id=' . $category['id'];
            ?>
            <a href="<?php echo $link_update?>">Update</a>
            <a onclick="return confirm('Xóa ko?')"
               href="<?php echo $link_delete?>">
                Delete
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
