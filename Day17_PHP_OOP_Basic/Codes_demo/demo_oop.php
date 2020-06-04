<?php
//demo_oop.php
//Một số phương pháp lập trình
//1 - Lập trình tuyến tính - nghĩ gì viết nấy
//cộng 2 số và hiển thị ra tổng
$number1 = 5;
$number2 = 6;
$sum = $number1 + $number2;
echo $sum;
//2 - Lập trình có cấu trúc - đã biết chia các chức năng
//thành các hàm
function sum($number1, $number2) {
    return $number1 + $number2;
}
echo sum(1, 2); //3

//3 - Lập trình hướng đối tượng
//- Lấy đối tượng làm trọng tâm để phân tích, và đưa ra
//các thuộc tính và phương thức có thể có của đối tượng đó

//4 - Demo các thuật ngữ của lập trình hướng đối tượng
// + Class - Lớp
//Như 1 khuôn mẫu, ví dụ lớp php46, trong lớp này sẽ có các bạn A
//- đối tượng A, tất cả các đối tượng trong 1 lớp đều có chung
//đặc điểm gì đó
class Person {

}
class Animal {

}

//- Object - Đối tượng - chính là các thể hiện cụ thể của class
class PersonA {
    //khai báo các thuộc tính của class
    public $name;
    public $age;

    //khai báo phương thức cho class
    public function run() {
        echo "run";
    }
}
//khởi tạo đối tượng từ class, đối tượng sẽ thừa kế tất cả
//các thuộc tính và phương thức của class đó
$obj_a = new PersonA();
//set name và age cho đối tượng vừa khởi tạo, và gọi phương thức
//run trên đối tượng này
$obj_a->name = 'Mạnh';
$obj_a->age = 30;
$obj_a->run();//run

//+ Từ khóa this - thể hiện cho chính đối tượng(class, object)
// hiện tại
class ThisDemo {
    public $name;
    public $age;

    public function getName() {
        //this sẽ sủ dụng chính class hiện tại để truy cập
        //vào thuộc tính name của nó
        echo "Name: " . $this->name;
    }
}
$obj_this_demo = new ThisDemo();
$obj_this_demo->name = 'Mạnh';
$obj_this_demo->getName(); //Name: Mạnh
//
//+ Phạm vi truy câp: phân quyền truy cập vào thuộc tính và
//phương thức của class
//- private: chỉ class đó mới có thể truy cập đc, các đối tượng
//khởi tao từ class này cũng ko thể truy cập đc
//- protected: chỉ class đó và các class kế thừa từ class đó
//mới truy cập đc
//- public: tự do truy cập
class PrivateTest {
    private $name;
    public $age;
    private function show() {
        //chỉ truy cập đc private trong nội bộ class đó
        $this->name = 'Mạnh';
        echo "show private";
    }
}
$obj_private_test = new PrivateTest();
//cố tình truy cập thuộc tính/phương thức private sẽ báo lỗi
//$obj_private_test->name = 'Mạnh';

class ProtectedTest {
    protected $name;
    public $age;
    private $address;

    protected function show() {
        echo "Show";
    }
}
class ChildProtected extends ProtectedTest {
    public function showName() {
        //có thể truy cập thuộc tính/phương thức protected từ
//        class cha
        echo $this->name;
//        echo $this->address;
    }
}
$obj_protected = new ProtectedTest();
//cố tình truy cập proteced từ đối tượng sẽ báo lỗi
//$obj_protected->name = 'MẠnh';
//thông thường, để cho đơn giản thì sẽ khai báo tất cả phương thức
//và thuộc tính là public
class PublicTest {
    public $name;
    public $age;
    public function getName() {
        echo $this->name;
    }
}

//- Thuộc tính của class
// - Phương thức của lớp

// - PHương thức khởi tạo của lớp - là phương thức
// đc chạy mặc định đầu tiên khi khởi tạo đối tượng từ class,
//ko cần gọi tường mình
class ConstructorTest {
    //khai báo phương thức khởi tạo mặc định
    public function __construct() {
        echo "dòng này luôn chạy đầu tiên khi khởi tạo đối tượng
        từ class ";
    }

    public function show() {
        echo "Phương thức bình thường thì cần phải có bước
        gọi từ đối tượng";
    }
}
$obj_constructor = new ConstructorTest();
//dòng này luôn chạy đầu tiên khi khởi tạo đối tượng
//        từ class
//- Từ khóa static - có thể truy cập 1 thuộc tính hoặc
// phương thức mà ko cần khởi tạo đối tượng, bằng cách khai cho
//nó từ khóa static
class StaticTest {
    public static $name;

    public static function show() {
        echo "Show";
    }
}
//truy cập thuộc tính/phương thức tĩnh bằng cú pháp
//Tên-class::tên-thuộc-tính-tĩnh/phương-thức-tĩnh
StaticTest::$name = "Mạnh";
StaticTest::show();
//- Kế thừa - extends - class con sẽ kế thừa tất cả các thuộc tính
//và phương thức của class cha mà đang ở phạm vi truy cập protected
//và public, PHP chỉ hỗ trợ đơn kế thừa - 1 class chỉ kế thừa
//1 class khác tại 1 thời điểm
class ExtendPerson {
    public $name;
    public $age;
    public $address;
    public function show() {
        echo "show";
    }
}
class ExtendChild extends ExtendPerson {
    //class ExtendChild có thể truy cập đc tất cả các thuộc tính
//    /phương thức protected và public của class ExtendPerson
    public $class;
    public function child() {

    }
}
$obj_child = new ExtendChild();
$obj_child->name = 'Mạnh';
$obj_child->age = 30;
//abstract - thể hiện cho tính trừu tương của 1 class
abstract class AbstractTest
{
    public $name;
    public $age;

    public function show()
    {

    }

    abstract public function getName();
}
//interface - 1 bộ khung
interface InterfaceTest {
//    public $name;
    public function getName();

    public function showAge();
}
class A implements InterfaceTest {
    public function getName(){
        // TODO: Implement getName() method.
    }
    public function showAge() {
        // TODO: Implement showAge() method.
    }
}