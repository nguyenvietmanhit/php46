<?php 

	$a = [
  		'a' => [
    		'b' => 0,
    		'c' => 1
  			],
  		'b' => [
    	'e' => 2,
    	'o' => [
      		'b' => 3
    	]
  		]
	];
	foreach ($a as $key => $value) {
 ?>
 <p><?php echo $value['c']; ?></p>
 <?php } ?>