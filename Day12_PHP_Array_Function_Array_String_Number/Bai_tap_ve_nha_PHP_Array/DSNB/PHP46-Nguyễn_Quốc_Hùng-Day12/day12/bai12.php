<?php
$numbers = [
	'key1' => 12,   
	'key2' => 30,   
	'key3' => 4,   
	'key4' => -123,   
	'key5' => 1234,   
	'key6' => -12565,   
];
echo $numbers['key1']." và ".$numbers['key6']."<br>";
echo max($numbers)." và ".min($numbers)." và ".array_sum($numbers)."<br>";

echo "<hr>";
sort($numbers);
foreach ($numbers as $key => $val) {
	echo "$val<br>";
}

echo "<hr>";
ksort($numbers);
foreach ($numbers as $key => $val) {
	echo "$key = $val<br>";
}
?>