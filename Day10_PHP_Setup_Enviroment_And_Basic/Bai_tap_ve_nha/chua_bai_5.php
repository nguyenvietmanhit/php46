<?php
//code php
$name = 'NVManh';
$email = 'nguyenvietmanhit@gmail.com';
$phone = 98759921;
$message = 'This is message';
?>
<form action="" id="form" method="get">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name"
        placeholder="<?php echo $name; ?>"
        />
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email"
        placeholder="<?php echo $email; ?>"/>
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" id="phone"
        placeholder="<?php echo $phone; ?>"/>
    </div>
    <div>
        <label for="message">Message</label>
        <textarea id="message"
placeholder="<?php echo $message; ?>"></textarea>
    </div>
    <div>
        <input type="submit" value="Send message"/>
    </div>
</form>
<h3 style="color: blue" id="result"></h3>
<script type="text/javascript">
    var obj_form = document.getElementById('form');
    function handleSubmit() {
        // console.log("done");
        //1 - lấy giá trị form
        var obj_name = document.getElementById('name');
        var name = obj_name.value;
        var email = document
            .getElementById('email').value;
        var phone = document
            .getElementById('phone').value;
        var message = document
            .getElementById('message').value;

        //2 - check validate
        //3 - hiển thị giá trị ra màn hình
        var result = "Name: " + name + "<br />";
        result += "Email: " + email + "<br />";
        result += "Phone: " + phone + "<br />";
        result += "Message: " + message + "<br />";

        var obj_result = document
            .getElementById('result');
        obj_result.innerHTML = result;

        //ngăn ngừa form tải lại
        event.preventDefault();
    }
    obj_form.addEventListener('submit', handleSubmit);
</script>

<?php
function getInfo($name, $age, $gender) {
    $string =
"Name: $name, Tuổi: $age, Giới tính: $gender";

    return $string;
}
$display =
    getInfo('mạnh', 12, 'nam');

//echo getInfo('Manh', 12, 'Nam');
?>