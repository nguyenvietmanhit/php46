<?php
function tinhChuVi($a){
	$cv= ($a)*pi();
	return round($cv,2);  
}
function tinhDienTich($a){
	$dt= pow($a/2,2)*pi();
	return round($dt,2);  
}
echo "<b>";
echo "Đường kính hình tròn = 6m <br />";
echo "Chu vi hình tròn = ".tinhChuVi(6)."m<br />";
echo "Diện tích hình tròn = ".tinhDienTich(6)."m<sup>2</sup><br />";
echo "</b>";
?>