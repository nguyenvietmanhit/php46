<?php
$keys =array('field1'=>'first', "field2"=>"second","field3"=>"third");
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$k = function($value){
    return $value;
};
$v =function($value){
    return $value;
};
$key = array_filter($keys,$k);
$value =array_filter($values,$v);
$keysAndValues =array_combine($key,$value);
?>