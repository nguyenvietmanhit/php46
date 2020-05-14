<?php 
function nhap($n)
{

	
	for ($i=1; $i <=$n ; $i++) { 
		echo $i;
		if($i==$n)
		{
			break;
		}
		echo "-";

		# code...
	}
}
echo nhap(30);
 ?>
