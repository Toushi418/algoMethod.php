<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));
$sum = 0;
foreach($array as $A){
    $sum += $A;
}
echo $sum;
?>