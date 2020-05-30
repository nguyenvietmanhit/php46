#1 - Tạo CSDL
#CREATE DATABASE IF NOT EXISTS php46;
#Tạo ra csdl php46 với các setting cho phép hiển thị ký tự có dấu
#CREATE DATABASE php46 CHARACTER SET utf8
#COLLATE utf8_general_ci;
#2 - Xóa CSDL
#DROP DATABASE php46;
#3 - Sử dụng CSDL để thao tác như tạo bảng, tạo trường
USE php46;

#4 - Các kiểu dữ liệu trong MYSQL
#Number: hay dùng các kiểu dữ liệu là TINYINT, INT, FLOAT(ít dùng hơn)
#String: VARCHAR - giới hạn ký tự, TEXT - ko giới hạn ký tự
#Ngày tháng - Date - Datetime:
# - DATETIME : lưu theo dang yyyy-mm-dd H:i:s, vd hợp lệ: 2020-05-28 20:41:32
# - DATE(ít dùng): lưu mỗi ngày tháng năm: yyyy-mm-dd
# - TIME(ít dùng): lưu mỗi giờ phút giây: H:i:s
# - YEAR(ít dùng): lưu mỗi năm: yyyy
# - TIMESTAMP: lưu giống kiểu DATETIME, tuy nhiên sẽ tự động
#nhận dạng được mũi giờ của hệ thống hiện tại, thường được
#dùng để tạo ra các trường ngày tháng đc sinh ra 1 cách tự động sử dụng hàm CURRENT_TIMESTAMP(), vd là trường ngày tạo bản ghi

#4 - Các kiểu dữ liệu trong MYSQL
#Number: hay dùng các kiểu dữ liệu là TINYINT, INT, FLOAT(ít dùng hơn)
#String: VARCHAR - giới hạn ký tự, TEXT - ko giới hạn ký tự
#Ngày tháng - Date - Datetime:
# - DATETIME : lưu theo dang yyyy-mm-dd H:i:s, vd hợp lệ: 2020-05-28 20:41:32
# - DATE(ít dùng): lưu mỗi ngày tháng năm: yyyy-mm-dd
# - TIME(ít dùng): lưu mỗi giờ phút giây: H:i:s
# - YEAR(ít dùng): lưu mỗi năm: yyyy
# - TIMESTAMP: lưu giống kiểu DATETIME, tuy nhiên sẽ tự động
#nhận dạng được mũi giờ của hệ thống hiện tại, thường được
#dùng để tạo ra các trường ngày tháng đc sinh ra 1 cách tự động sử dụng hàm CURRENT_TIMESTAMP(), vd là trường ngày tạo bản ghi

#5 -Tạo bảng students, có các trường id, name, age, birthay,
#created_at
CREATE TABLE students(
    #khai báo trường id độ dài 11 ký tự, tự động tăng, là khóa chính của bảng
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) DEFAULT NULL,
    age INT(11) DEFAULT NULL,
    birthday DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

#6 - Xóa bảng
#DROP TABLE students;
# - Insert dữ liệu vào bảng students, đang có các trường
# id, name, age, birthday, created_at
INSERT INTO students(`name`, `age`, `birthday`)
VALUES
('Manh', 18, '1990-01-05 12:00:00'),
('Manh1', 30, '1999-11-11 11:00:00'),
('Manh2', 31, '2000-11-11 11:00:00')

# - LẤy dữ liệu từ bảng students
#lấy tất cả các trường đang có trong bảng students
#SELECT * FROM students;
#SELECT id, name FROM students;
#lấy theo điều kiện gì đó, sử dụng WHERE, có thể kết hợp AND hoặc OR
#SELECT * FROM students WHERE id > 1;
#SELECT * FROM students WHERE age > 18 AND id >= 1;
#lấy giới hạn số bản ghi trả về, sử dụng từ khóa LIMIT
SELECT * FROM students LIMIT 2;#chỉ lấy 2 bản ghi đầu tiên
#lấy giới hạn số bản ghi trả về, tính từ bản ghi thứ mấy
SELECT * FROM students LIMIT 1,5; #lấy tối đa 5 bản ghi, tính từ bản ghi thứ 1

#8 - Từ khóa LIKE, so sánh tương đối, thường dùng trong chức năng search
SELECT * FROM students WHERE name LIKE '%manh%';#lấy ra tất cả các student mà có name chứa ký tự manh

# - LẤy dữ liệu từ bảng students
#lấy tất cả các trường đang có trong bảng students
#SELECT * FROM students;
#SELECT id, name FROM students;
#lấy theo điều kiện gì đó, sử dụng WHERE, có thể kết hợp AND hoặc OR
#SELECT * FROM students WHERE id > 1;
#SELECT * FROM students WHERE age > 18 AND id >= 1;
#lấy giới hạn số bản ghi trả về, sử dụng từ khóa LIMIT
SELECT * FROM students LIMIT 2;#chỉ lấy 2 bản ghi đầu tiên
#lấy giới hạn số bản ghi trả về, tính từ bản ghi thứ mấy
SELECT * FROM students LIMIT 1,5; #lấy tối đa 5 bản ghi, tính từ bản ghi thứ 1



#8 - Từ khóa LIKE, so sánh tương đối, thường dùng trong chức năng search
SELECT * FROM students WHERE name LIKE '%manh%';#lấy ra tất cả các student mà có name chứa ký tự manh

#9 - Update: cập nhật dữ liệu cho bảng
#với chức năng update, luôn cần điều kiện WHERE để biết đc đang update cho bản ghi, tránh trường hợp update toàn bộ bản ghi
UPDATE students
SET `name` = 'New name', `age` = 20
WHERE id = 1;
#10 - Delete: xóa dữ liệu của bảng
#với chức năng xóa, luôn cần điều kiện WHERE để biết đc đang xóa bản ghi nào, tránh trường hợp xóa toàn bộ bản ghi của bảng
DELETE FROM students WHERE id = 1;

#11 - Sắp xếp các bản ghi trả về ORDER BY
SELECT * FROM students ORDER BY age DESC; #sắp xếp theo chiều giảm dần của trường age, desc: giảm dần, asc: tăng dần

#12 - Join bảng: có 3 kiểu chính: INNER JOIN, LEFT JOIN, RIGHT JOIN
#điều kiện join là 2 bảng phải có mối quan hệ
CREATE TABLE products(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    category_id INT(11),
    name VARCHAR(255)
);
CREATE TABLE categories(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255)
);



