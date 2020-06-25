<?php
//models/User.php
require_once 'models/Model.php';
class User extends Model {

    //khai báo các thuộc tính của class dựa vào trường trong
    //bang users
    public $username;
    public $password;

    //lấy thông tin user dựa vào username
    public function getUser($username) {
        $sql_select_one =
            "SELECT * FROM users WHERE `username` = :username";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $arr_select = [
            ':username' => $username
        ];
        $obj_select_one->execute($arr_select);
        $user = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    //Đăng ký user
    public function register() {
        //với các giá trị là text thì cần đặt placeholder
        //để tránh lỗi SQLInjection
        $sql_insert = "INSERT INTO users(`username`, `password`)
 VALUES(:username, :password)";
        $obj_insert = $this->connection
            ->prepare($sql_insert);
        //gán giá trị thật cho các placeholder
        $arr_insert = [
            ':username' => $this->username,
            ':password' => $this->password
        ];
        return $obj_insert->execute($arr_insert);
    }
}