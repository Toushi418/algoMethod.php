<?php
$N = trim(fgets(STDIN));
$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));

$count = 0;

for($i = 0;$i < $N;$i++){
    if($S[$i] != $T[$i]){
        $count++;
    }
}

echo $count;
?>