<html>
    <head>
        <title>Bai11</title>
    </head>
    <body>
    <?php
        function ktSoNguyenTo($n)
        {
            if ($n < 2)
                return 0;

            for ($i = 2; $i <= sqrt((float)$n); $i ++)
            {
                if ($n%$i==0)

                    return 0;

            }
            return 1;

        }
    ?>
        <table width="230px" cellspacing="0" cellpadding="0" border="1px">

            <?php
                for ($i=0;$i<10;$i++)
                {echo "<tr>";
                    $sum=$i*10;
                    for ($j=1;$j<=10;$j++)
                    {
//
                        $and=$sum+$j;
                                if (ktSoNguyenTo($and)==1) {echo "<td width='20px' height='20px' bgcolor='green'>$and</td>";}
                                else {echo "<td height='20px' width='20px' bgcolor='#ffebcd'>$and</td>";}
                    }

                    echo "</tr>";


                }
            ?>
        </table>
    </body>
</html>