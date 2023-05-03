<?php
$array = explode(" ", trim(fgets(STDIN)));
$N = $array[0];
$V = $array[1];

$arrayA = explode(" ", trim(fgets(STDIN)));

$TorF = in_array($V,$arrayA);
if($TorF){
    echo 'Yes';
}else{
    echo 'No';
}
?>