<?php

$array = explode(" ", trim(fgets(STDIN)));
$A = $array[0];
$B = $array[1];
if($A < $B){
    echo $B;
}else{
    echo $A;
}

?>