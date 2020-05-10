<?php
$variable1="1.23";
$variable2=28;
$variable3=null;
$variable4=[123,false,null,1.23,FALSE,[],TRUE];
$variable5=-1.23;
$variable6="false";
$variable7="php";
$abc=123;
echo "today i will learn php-".'"variable"';
$name="Nguyễn Viết Mạnh";
$age=29;
$dateofbirth="05/01/1990";
$sex="nam";
$address="Sơn Đồng-Hoài Đức-Hà Nội";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px">
		<tr>
			<td>Họ Tên</td>
			<td>Tuổi</td>
			<td>Ngày Sinh</td>
			<td>Giới Tính</td>
			<td>Quê Quán</td>
		</tr>
		<tr>
			<td><?php echo $name ?></td>
			<td><?php echo $age ?></td>
			<td><?php echo $dateofbirth ?></td>
			<td><?php echo $sex; ?></td>
			<td><?php echo $address;  ?></td>
		</tr>
	</table>
</body>
</html>
<?php 
function info($name,$age,$sex)
{
	echo "Họ Tên:".$name.",Tuổi:".$age.",Giới tính:".$sex;

}
info("mạnh",24,"nam");
echo "<br>";
function cvHCN($cd,$cr)
{
	echo "chiều dài hcn là:".$cd."m";
	echo "<br>";
	echo "chiều rộng hình chữ nhật là:".$cr."m";
	echo "<br>";
	$cv=($cd+$cr)*2;
	echo "chu vi hình chữ nhật là :".$cv."m";
	echo "<br>";
}
function dtHCN($cd,$cr)
{
	$dt=$cd*$cr;
	echo "diện tích hình chữ nhật là:".$dt."m2";
}
echo cvHCN(4,3);
echo dtHCN(4,3);
 

 ?>


