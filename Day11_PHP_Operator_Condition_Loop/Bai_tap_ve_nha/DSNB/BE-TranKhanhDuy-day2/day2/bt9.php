<style type="text/css">
    table{
        margin: auto;
        border: 1px solid red;
        padding: ;
    }
    tr{
        border: none;
    }
    td{
        text-align: center;
        border: 2px solid crimson;
        border-bottom:0 ;
        padding: 5px;
    }
</style>
<table cellspacing="0" cellpadding="0">
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>

    </tr>
    <?php
    for($i = 1;$i <= 10;$i++){
        echo "<tr/>";
        for($j = 1;$j <= 10;$j++){
            echo "<td/>$i x $j = " .$i*$j;
        }
        echo "<tr/>";
    }
    ?>
</table>

