<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$averageValue = round(array_sum($numbers)/count($numbers),2);
echo $averageValue."<br>";
$bigger = "";
$less = "";
foreach ($numbers as $key => $value) {
	if ($value>$averageValue) {
		$bigger .= $value." ";
	}
	else{
		$less .= $value." ";
	}
}
echo $bigger."<br>";
echo $less."<br>";

$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
print_r($array1);
echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
print_r($array2);
echo "</pre>";
echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
print_r(array_values($array1));
echo "</pre>";
die;
die;
echo "</pre>";
die;
?>