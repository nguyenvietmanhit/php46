<?php
//models/Category
require_once 'models/Model.php';
class Category extends Model {
    //lấy ra tất cả danh mục
    public function getAll() {
        //tạo câu truy vấn
        $sql_select_all = "SELECT * FROM categories";
        //cbi đối tượng truy vấn
        $obj_select_all = $this->connection
            ->prepare($sql_select_all);
        $obj_select_all->execute();
        $categories = $obj_select_all
            ->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}