<?php
//models/Order.php
require_once 'models/Model.php';

class Order extends Model {
    public $fullname;
    public $address;
    public $mobile;
    public $email;
    public $note;
    public $price_total;
    public $payment_status;

    public function insert() {
        //tạo câu truy vấn
        $sql_insert = "INSERT INTO orders()"
    }
}