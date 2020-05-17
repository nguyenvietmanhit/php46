<!--thuc_hanh.php-->
<!--Làm thực hành 4 trong slide-->
<?php
//xử lý submit form
//debug mảng $_GET
echo "<pre>";
print_r($_GET);
echo "</pre>";
//khai báo các biến lỗi và thành công
$error = '';
$result = '';
//kiểm tra xem user đã submit form hay chưa
if (isset($_GET['submit'])) {
    //gán dữ liệu từ mảng $_GET cho các biến
    //theo thói quen sẽ đặt tên biến trùng với key
//    của mảng
    $name = $_GET['name'];
    $email = $_GET['email'];
    $specific_time = $_GET['specific_time'];
    $class_details = $_GET['class_details'];
    //chú ý: khi xử lý với radio và checkbox, thì sẽ
//    có trường hợp ko tích chọn radio nào hoặc ko tích
//    vào checkbox nào, thì mảng $_GET/$_POST sẽ ko
//    bắt được name của input tương ứng
    $gender = isset($_GET['gender'])
        ? $_GET['gender'] : '';
//    VALIDATE DỮ LIỆU
    if (empty($name)) {
        $error = 'Name ko đc để trống';
    } else if (empty($email)) {
        $error = 'Email ko đc để trống';
    } else if (!filter_var($email,
        FILTER_VALIDATE_EMAIL)) {
        $error = 'Trường email phải có định dạng email';
    } else if (empty($specific_time)
        || empty($class_details)) {
        $error = 'Trường specific time 
        hoặc class details ko đc để trống';
    }

    //xử lý sau khi validate thành công
    if (empty($error)) {
        $result .= "Your given details are as: <br />";
        $result .= "Name: $name <br />";
        $result .= "Email: $email <br />";
        $result .= "Specific time: $specific_time <br />";
        $result .= "Class details: $class_details <br />";
        //đối với các input như radio, checkbox, select
        //khi mà value đang ở dạng số thì trước khi hiển
//        thị ra màn hình cho user cần có bước chuyển đổi
        //dữ liệu về định dạng dễ hiểu cho user
        $gender_text = '';
        if (isset($_GET['gender'])) {
            switch ($_GET['gender']) {
                case 0: $gender_text = 'Female';
                break;
                case 1: $gender_text = 'Male';
                break;
            }
        }
        //chỉ hiển thị ra gender khi biến gender_text
//        có giá trị
        if (!empty($gender_text)) {
            $result .= "Gender: $gender_text";
        }
    }
}
?>
<!--Hiển thị thông báo lỗi và thông báo thành công -->
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<h3 style="color: green;">
    <?php echo $result; ?>
</h3>
<!--dựng form html-->
<form action="" method="get">
    <table>
        <tr>
            <td>Name:</td>

            <td>
<!--                đổ lại dữ liệu cho trường name
dựa vào trạng thái submit form
-->
                <input type="text" name="name"
                   value="<?php echo isset($_GET['name']) ?
                       $_GET['name'] : '' ?>" />
            </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>
                <input type="text" name="email"
                       value="<?php echo isset($_GET['email']) ?
                       $_GET['email'] : '' ;?>" />
            </td>
        </tr>
        <tr>
            <td>Specific Time</td>
            <td>
                <input type="date" name="specific_time"
                value="<?php echo isset($_GET['specific_time']) ?
                    $_GET['specific_time'] : '' ;?>" />
            </td>
        </tr>
        <tr>
            <td>Class details: </td>
            <td>
                <textarea name="class_details"><?php echo isset($_GET['class_details']) ?
                        $_GET['class_details'] : '' ;?></textarea>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php
                //xử lý checked cho input radio
                //có bao nhiêu radio thì sẽ tạo
//                bấy nhiêu biến dạng checked
                $gender_female = '';
                $gender_male = '';
                if (isset($_GET['gender'])) {
                    switch ($_GET['gender']) {
                        case 0: $gender_female = 'checked';
                        break;
                        case 1: $gender_male = 'checked';
                        break;
                    }
                }
                ?>
                <input type="radio" name="gender"
                       value="0" <?php echo $gender_female; ?> /> Female
                <input type="radio" name="gender"
                value="1" <?php echo $gender_male; ?> /> Male
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit"
                       value="Show info" />
                <input type="reset" name="reset"
                       value="Reset" />
            </td>
        </tr>
    </table>
</form>