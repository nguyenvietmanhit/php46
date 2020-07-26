<?php
//app/Http/Controller/ProductController
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
      //Lấy ra tất cả thông tin về sản phẩm
      //Lấy tất cả sản phẩm  theo cơ chế Eloquent của Laravel -
      //sử dụng model
      //ngoài ra còn có cơ chế QueryBuilder để tương tác với CSDL
//      $products = Product::all();
      //dùng cơ chế phân trang của Laravel, truyền vào số
      //item sẽ hiển thị trên 1 trang
      $products = Product::paginate(2);
      echo "<pre>";
      print_r($products);
      echo "</pre>";

      //gọi view index ra
      return view('products.index', [
          'products' => $products
      ]);
    }

    //chỉ dùng hiển thị ra form thêm mới
    public function create() {
//      echo "Thêm mới sp";
      //gọi view, view nằm trong đường dẫn sau:
      //resources/views
      //phương thức view này giống với phương thức render trong
      //mô hình mvc
      return view('products/create', []);
    }
    //Phương thức dùng để lưu dữ liệu khi submit form thêm mới
    //Mọi phương thức trong Laravel, đều có sẵn 1 đối tượng của
//    của class Request chứa tất cả dữ liệu từ form gửi lên, kể
//cả dữ liệu quan đến file upload
//Xử lý form trong Laravel sẽ dùng đối tượng này
    public function store(Request $request) {
      //khi dùng LAravel, có thể quên $_GET, $_POST đi, mà sẽ
      //sử dụng các hàm mà laravel cũng cấp sẵn để lấy giá trị
      //gửi lên từ form
      echo "<pre>";
      print_r($request->all());
      echo "</pre>";
      // + Validate dữ liệu:
      // Tên và giá ko đc để trống
      // Tên phải ít nhất 3 ký tự
      // Avatar phải có dạng ảnh
      //Khai báo các Rule liên quan đến validate, các rule
      //này cần tham khảo trên document của Laravel
      $rules = [
          'name' => ['required', 'min:3'],
          'price' => ['required'],
          'avatar' => ['image']
      ];
      //khai báo 1 mảng message để tùy ý hiển thị lỗi validate
      $messages = [
        'name.required' => 'Name ko đc để trống',
        'name.min' => 'Name phải có ít nhất 3 ký tự',
        'price.required' => 'Giá ko đc để trống',
        'avatar.image' => 'Phải uploa dạng ảnh'
      ];
      //thực thi validate form sử dụng hàm validate() trên đối tương
      //$request
      $request->validate($rules, $messages);
      //nếu qua đc bước validate, xử lý lưu dữ liệu vào bảng
//      tương ứng sử dụng model trong Laravel
//      xử lý upload trước, chỉ xử lý nếu user có upload file lên
      $avatar = '';
      if (isset($request->avatar)) {
        $obj_avatar = $request->avatar;
        //Tạo thư mục sẽ upload lên, gọi hàm public_path bao gồm luôn
        //cả việc check tồn tại thư mục thì mới tạo mới
        //dường dẫn sau khi tạo sẽ là: public/uploads
        $dir_uploads = public_path('uploads');

        //tạo tên file mang tính ngẫu nhiên
        //phương thức getClientOriginalName sẽ trả về tên file,
        //tương đương với $_FILES với key=name
        $avatar = time() . '-' .
            $obj_avatar->getClientOriginalName();
        //move file vào trong thư mục upload dã tạo, truyền 2 giá trị
        //: đường dẫn tới thư mục upload, tên file tương ứng
        $obj_avatar->move($dir_uploads, $avatar);
      }

      // + Xử lý lưu dữ liệu vào bảng products, sử dụng model Product
      //Khi làm việc với Laravel, ko cần nhúng các file liên quan sử
      //dụng require_once như MVC nữa, mà đã có cơ chế thay thế tự
      //động là namespace r
      $product_model = new Product();
      //gán các giá từ form cho model vừa tạo
      $name = $request->get('name');
      $price = $request->get('price');
      //model trong Laravel có cơ chế tự hiểu đc các trường trong
      //bảng tương ứng, nên ko cần khai báo tường mình các trường
      //dó làm các thuộc tính của model, mà vẫn gọi ra đc
      $product_model->name = $name;
      $product_model->price = $price;
      $product_model->avatar = $avatar;
      //set giá trị mặc định cho trường category_id, status
      $product_model->category_id = 1;
      $product_model->status = 1;
      //phương thức save() là phương thức có sẵn của Model Laravel
      //thực hiện lưu dữ liệu của model tương ứng
      $is_insert = $product_model->save();
//      var_dump($is_insert);
      if ($is_insert) {
        //trong Laravel ko nên sử dụng biến $_SESSION, mà sẽ sử dụng
//        hàm session() để thao tác với session
        session('success', 'Thêm mới thành công');
      } else {
        session('error', 'Thêm thất bại');
      }
      //chuyển hướng trong Laravel, sử dụng  hàm redirect, truyền
      //vào url đã khai báo trong route
      return redirect('/product/list');
    }

    public function update($id) {
      echo "Update bản ghi $id";
    }

    public function delete($id) {
      echo "Delete bản ghi $id";
    }
}
