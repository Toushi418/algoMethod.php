<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));

$result = 1;
foreach($array as $A){
    $result *= $A;
}

echo $result;
?>