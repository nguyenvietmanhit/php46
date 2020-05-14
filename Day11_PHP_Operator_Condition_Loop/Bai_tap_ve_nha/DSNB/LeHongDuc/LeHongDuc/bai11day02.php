<?php 
function check($snt)
{

	if ($snt < 2)    
        return false;

    for ($i = 2; $i <= sqrt($snt); $i ++)
    {
        if ($snt%$i==0)
        {
            return false;
        }
    }
    return true;
}

	echo "<table border=1px width=500px height=500px>";
	for ($i=1; $i<=10 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=10 ; $j++) { 
			if(check(($i-1)*10+$j)==true)
			{
				echo "<td style=\"background-color:green\">";
			}
			else{
				echo"<td>";
			}
			
			echo ($i-1)*10+$j;

			
			echo "</td>";
		}
		echo "</tr>";
		# code...
	}
	echo "</table>";

 ?>