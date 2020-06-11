<?php
//configs/database.php
//Chứa các hằng số kết nối CSDL theo cơ chế PDO
//ko khai báo biến $connection ở đây
class Database {
    const DB_DSN = 'mysql:host=localhost;port=3306;dbname=day18;
charset=utf8';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
}