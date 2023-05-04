<?php
$S = trim(fgets(STDIN));
$array = explode(" ",trim(fgets(STDIN)));
$N = $array[0];
$M = $array[1];

$SN = $S[$N - 1]; 
$SM = $S[$M - 1];

$S[$N - 1] = $SM;
$S[$M - 1] = $SN;

echo $S;
?>