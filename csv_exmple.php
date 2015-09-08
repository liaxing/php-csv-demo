<?php
error_reporting(E_ALL ^ E_NOTICE);
$handle = fopen('csv_exmple.csv','r');
$i = 0;
$arr = array();
while($data = fgetcsv($handle)){
    if($i>0){
    	$arr[$i] = $data;
    }
    $i++;
}
print_r($arr);
exit();
