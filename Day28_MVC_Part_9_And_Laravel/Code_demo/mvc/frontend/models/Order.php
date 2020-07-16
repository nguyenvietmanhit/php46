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
        //xử lý lưu vào bảng orders
        return true;
    }
}