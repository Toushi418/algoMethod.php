<?php
$array = explode(" ", trim(fgets(STDIN)));
$A = $array[0];
$B = $array[1];
$divA = $A % 10;
$divB = $B % 10;

if($divA < $divB){
    echo $A;
}else{
    echo $B;
}
?>