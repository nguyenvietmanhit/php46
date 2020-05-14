<?php 

	echo "<table border=1px width=500px height=500px>";
	for ($i=1; $i<=8 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=8 ; $j++) { 
			if($j%2!=0&&$i%2!=0)
			{
				echo "<td style=\"background-color:black\">";
			}
			else if($j%2==0&&$i%2==0)
			{
				echo "<td style=\"background-color:black\">";
			}
			else
			{
				echo "<td>";
			}
			
			
			echo "</td>";
		}
		echo "</tr>";
		# code...
	}
	echo "</table>";

 ?>
