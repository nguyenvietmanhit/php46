
<!DOCTYPE hmtl>
<html>
<head>
    <title>Demo PHP</title>
    <meta charset="utf-8">
</head>
<body>
    <h1> PHP đầu tiên</h1>

    <?php
    $abc = 123;
    echo 'Today I \'ll learn PHP - "Variable"';
    $varible1 = '';
    $is_bool = is_bool($varible1);
    var_dump($is_bool);
    ?>


<table>
    <tr>
        <th>
            Khai báo biến
        </th>
        <th>
            Ép sang int
        </th>
        <th>
            Ép sang float
        </th>
        <th>
            Ép sang string
        </th>
        <th>
            Ép sang boolean
        </th>
    </tr>
    <tr>
        <th>
            $variable = '123abc'
        </th>
        <th>
            false
        </th>
        <th>
            false
        </th>
        <th>
            true
        </th>
        <th>
            false
        </th>
    </tr>
    <tr>
        <th>
            $variable2 = null
        </th>
        <th>
            false
        </th>
        <th>
            false
        </th>
        <th>
            false
        </th>
        <th>
            false
        </th>
    </tr>
    <tr>
        <th>
            $variable3 =''
        </th>
        <th>
            false
        </th>
        <th>
            false
        </th>
        <th>
            true
        </th>
        <th>
            false
        </th>
    </tr>
    <tr>
        <th>
            $variable4 = 'abc123'
        </th>
        <th>
            false
        </th>
        <th>
            false
        </th>
        <th>
            true
        </th>
        <th>
            false
        </th>
    </tr>
</table>
</body>
</html>