<?php
$array = explode(" ", trim(fgets(STDIN)));


$N = $array[0];
$V = $array[1];
$arrayA = explode(" ", trim(fgets(STDIN)));
$numArray = array_map('intval',$arrayA);



$result = -1;

if(array_keys($numArray,$V)){
    $resultArray = array_keys($numArray,$V);
    $result = $resultArray[count($resultArray) - 1];
}

echo $result;
?>