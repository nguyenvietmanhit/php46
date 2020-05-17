<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
//Đây là mảng tuần tự
$color = $arrs[0];//đỏ
$color1 = $arrs[1];//xanh
$color2 = $arrs[2];//cam
$color3 = $arrs[3];//trắng
$disPlay = "<span style='font-style: italic;'>Màu <span style='color: red'>$color</span> là màu yêu thích của Anh, 
<span style='color: red'>$color3</span> là màu yêu thích của Sơn, 
<span style='color: red'>$color2</span> là màu yêu thích của Thắng, 
còn màu yêu thích của tôi là màu <span style='color: red'>$color3</span></span>";
echo "<br />";
echo $disPlay;
?>