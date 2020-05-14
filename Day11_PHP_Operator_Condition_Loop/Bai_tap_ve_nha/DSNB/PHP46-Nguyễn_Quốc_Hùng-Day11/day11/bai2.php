<?php
function tinhChuVi($a){
	$cv= ($a)*4;
	return $cv;  
}
function tinhDienTich($a){
	$dt= $a*$a;
	return $dt;  
}
echo "<b>";
echo "Cạnh hình vuông = 12m <br />";
echo "Chu vi hình vuông = ".tinhChuVi(12)."m<br />";
echo "Diện tích hình vuông = ".tinhDienTich(12)."m<sup>2</sup><br />";
echo "</b>";
?>