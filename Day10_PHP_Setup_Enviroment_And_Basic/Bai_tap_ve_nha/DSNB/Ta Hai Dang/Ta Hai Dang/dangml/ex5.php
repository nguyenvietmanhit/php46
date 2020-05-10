<?php
    $name = "Tạ Hải Đăng";
    $email = "tahaidang@gmail.com";
    $phone = "0975xxxxxx";
    $mess = "This is a message";
?>
<table style="margin:auto;width=500px;">
    <tr>
        <td>Name*</td>
        <td>Email*</td>
        <td>Phone</td>
    </tr>
    <tr>
        <td><input type="text" placeholder="<?= $name ?>" id="name"></td>
        <td><input type="text" placeholder="<?= $email ?>" id="mail"></td>
        <td><input type="text" placeholder="<?= $phone ?>" id="phone"></td>
    </tr>
    <tr>
        <td>Message*</td>
    </tr>
    <tr>
        <td colspan="3">
            <textarea name="" id="mess" placeholder="<?= $mess ?>" style="width:500px;height:100px"></textarea>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="Send Message" style="background: orange" id="submit" onclick="hihi();"></td>
    </tr>
</table>
<div id="result"></div>
<script language="javascript">
    function hihi() {
        var name = document.getElementById("name").value;
        var mail = document.getElementById("mail").value;
        var phone = document.getElementById("phone").value;
        var mess = document.getElementById("mess").value;
        document.getElementById("result").innerHTML= "Name: "+name+"<br>"+"Email: "+mail+"<br>"+"Phôn: "+phone+"<br>"+"Mét: "+mess;
    }
</script>