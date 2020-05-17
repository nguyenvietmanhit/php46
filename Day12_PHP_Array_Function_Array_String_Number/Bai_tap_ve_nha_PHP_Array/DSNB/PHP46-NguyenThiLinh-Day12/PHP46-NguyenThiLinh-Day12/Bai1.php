<?php
function multipleTasks($arr){
    $sum = 0;
    $sub = 0;
    $mul = 0;
    $div = 0;
    $sumString = "Tổng các phần tử = ";
    $subString = "Hiệu các phần tử = ";
    $mulString = "Tích các phần tử = ";
    $divString = "Thương các phần tử = ";
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
        $sumString .= $arr[$i];
        $subString .= $arr[$i];
        $mulString .= $arr[$i];
        $divString .= $arr[$i];
        if($i == 0){
            $sub += $arr[$i];
            $mul += $arr[$i];
            $div += $arr[$i];
        }else{
            $sub -= $arr[$i];
            $mul *= $arr[$i];
            $div /= $arr[$i];
        }
        if($i == (count($arr) - 1)){
            break;
        }else{
            $sumString .= " + ";
            $subString .= " - ";
            $mulString .= " * ";
            $divString .= " / ";
        }
    }
    $sumString .= " = $sum";
    $subString .= " = $sub";
    $mulString .= " = $mul";
    $divString .= " = $div";

    return "$sumString <br/>$subString <br/>$mulString <br/>$divString";
}
$arr = [2, 5,6, 9, 0];
echo multipleTasks($arr);
