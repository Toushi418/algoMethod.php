<?php
$array = explode(" ", trim(fgets(STDIN)));
$A = $array[0];
$B = $array[1];

if($A % $B === 0){
    echo "Yes";
}else{
    echo "No";
}
?>