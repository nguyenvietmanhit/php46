<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b'=>3
        ]
    ]
];
echo $a['b']['o']['b'];
echo "<br/>";
echo $a['a']['c'];
echo"<br/>";
echo "<pre>";
print_r($a['a']);
echo "</pre>"

?>