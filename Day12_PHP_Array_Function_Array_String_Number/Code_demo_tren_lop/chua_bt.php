<?php
//Chữa bài tập 5 ngày 11
//$is_number = 0;
//5.	VIẾT HÀM tính biểu thức có dạng sau
//S(n) = 1/1 + 1/2 + 1/3 + 1/4 +… 1/n
//sử dụng PHP với n là biến cho trước
//•	Giả sử với số n = 10 thì kết quả hiển
// thị sẽ có dạng như sau:
//S(10) = 1/1 + 1/2 + 1/3 + 1/4 + 1/5 + 1/6
// + 1/7 + 1/8 + 1/9 + 1/10 = 2.9289682539683
function doExpress($n) {
    $string = "S($n) = ";
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += 1/$i;
        $string .= "1/$i";
        if ($i == $n) {
            break;
        }
        $string .= " + ";
    }
    //với trường hợp n truyền vào = 3 thì
//    $string: S(3) = 1/1 + 1/2 + 1/3
    $string .= " = " . $sum;
    //kiểu dữ liệu string
    return $string;
}

$string = doExpress(10);
echo $string;

//viết hàm kiểm tra số nguyên tố
//số nguyên tố là các số nguyên >=2 và chỉ
// chia hết cho 1
//và chính nó
function isPrime($number) {
    $is_prime = TRUE;
    //xử lý logic
    if ($number < 2) {
        return FALSE;
    }

//    $number = 9;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $is_prime = FALSE;
            break;
        }
    }

    return $is_prime;
}

$is_prime = isPrime(15);
var_dump($is_prime); //
if ($is_prime) {
    echo 'Là số nguyên tố';
} else {
    echo 'Không phải số nguyên tố';
}