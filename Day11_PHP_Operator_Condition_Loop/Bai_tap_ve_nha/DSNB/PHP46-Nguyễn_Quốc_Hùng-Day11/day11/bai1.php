<?php
function tinhChuVi($a,$b){
	$cv= ($a+$b)*2;
	return $cv;  
}
function tinhDienTich($a,$b){
	$dt= $a*$b;
	return $dt;  
}
echo "<b>";
echo "Chiều dài hình chữ nhật = 10m <br />";
echo "Chiều rộng hình chữ nhật = 5m <br />";
echo "Chu vi hình chữ nhật = ".tinhChuVi(10,5)."m<br />";
echo "Diện tích hình chữ nhật = ".tinhDienTich(10,5)."m<sup>2</sup><br />";
echo "</b>";
?>