<?php
//database/migrations/...
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //+ Các framework khi truyền tham số vào hàm thì thường
            //sẽ dùng tên class phía trước để gợi nhớ các phương
            //thức liên quan đến class khi sử dụng đối tượng của class
            //đó
            //+ Phương thức tĩnh create của class Schema đang sử dụng
            //cơ chế hàm callback để tạo các trường - code trong hàm
            //callback này chỉ đc chạy sau khi tạo bảng thành công
            //+ Tạo các trường của bảng trong phương thức up
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->tinyInteger('status');
            //phương thức này sẽ sinh ra cả 2 trường tên là
            //created_at và updated_at theo đúng cơ chế đã mô tả
            //của trường
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //phương thức down sẽ chạy ngược lại với phương thức up
        //thông thường sẽ xóa bỏ những gì đã tạo bằng phương thức
        //up trong phương thức down này
        Schema::dropIfExists('categories');
    }
}
