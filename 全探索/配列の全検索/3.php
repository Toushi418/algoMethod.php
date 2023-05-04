<?php
$N = trim(fgets(STDIN));
$arrayA = explode(" ", trim(fgets(STDIN)));

$count = 0;
foreach($arrayA as $num){
    if($num > 0){
        $count++;
    }
}

echo $count;
?>