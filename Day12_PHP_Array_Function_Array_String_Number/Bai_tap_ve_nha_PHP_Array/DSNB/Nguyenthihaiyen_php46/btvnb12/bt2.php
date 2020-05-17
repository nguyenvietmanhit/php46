<?php 
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$dt0 = $arrs[0]; //đỏ
$dt1 = $arrs[1]; //xanh
$dt2 = $arrs[2]; //cam
$dt3 = $arrs[3]; //trắng
$resultString = "<span style='font-style: italic;'>Màu <span style='color: red'>$dt0</span> là màu yêu thích của Anh, 
<span style='color: red'>$dt3</span> là màu yêu thích của Sơn, 
<span style='color: red'>$dt2</span> là màu yêu thích của Thắng, 
còn màu yêu thích của tôi là màu <span style='color: red'>$dt1</span></span>";
echo "<br />";
echo $resultString;
 ?>