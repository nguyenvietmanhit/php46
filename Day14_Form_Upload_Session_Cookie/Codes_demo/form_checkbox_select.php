<?php
//form_checkbox_select.php
$error = '';
$result = '';
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST['submit'])) {
    $country = $_POST['country'];
    if (isset($_POST['jobs'])) {
        $jobs = $_POST['jobs'];
        //logic để check xem các checkbox nào đang đc tích
        foreach($jobs AS $job) {
            if ($job == 0) {
                $result .= "Dev";
            }
            if ($job == 1) {
                $result .= "Test";
            }
            if ($job == 2) {
                $result .= "PM";
            }
        }
    }
    //xử lý hiển thị select giống với radio
    switch ($country) {
        case 0: $result .= "Việt Nam";
            break;
        case 1: $result .= "Japan";
            break;
        case 2: $result .= "Korea";
            break;
    }
}
?>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<h3 style="color: green">
    <?php echo $result; ?>
</h3>
<form action="" method="post">
    Country:
    <?php
    if (isset($_POST['country'])) {
        $country = $_POST['country'];
        $selected_0 = '';
        $selected_1 = '';
        $selected_2 = '';
        switch ($country) {
            case 0: $selected_0 = 'selected';
                break;
            case 1: $selected_1 = 'selected';
                break;
            case 2: $selected_2 = 'selected';
            break;
        }
    }
    ?>
    <select name="country">
        <option value="0" <?php echo $selected_0; ?>>Việt Nam</option>
        <option value="1" <?php echo $selected_1; ?>>Japan</option>
        <option value="2" <?php echo $selected_2; ?>>Korea</option>
    </select>
    <br />
    Jobs:
    <?php
    $checked_0 = '';
    $checked_1 = '';
    $checked_2 = '';
    if (isset($_POST['jobs'])) {
        $jobs = $_POST['jobs'];
        foreach ($jobs AS $job) {
            if ($job == 0) {
                $checked_0 = 'checked';
            }
            if ($job == 1) {
                $checked_1 = 'checked';
            }
            if ($job == 2) {
                $checked_2 = 'checked';
            }
        }
    }
    ?>
    <input <?php echo $checked_0; ?> type="checkbox" name="jobs[]" value="0" />Dev
    <input <?php echo $checked_1; ?> type="checkbox" name="jobs[]" value="1" />Test
    <input <?php echo $checked_2; ?> type="checkbox" name="jobs[]" value="2" />PM
    <br />
    <input type="submit" name="submit" value="Send" />
</form>
