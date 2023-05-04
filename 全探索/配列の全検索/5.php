<?php
$N = trim(fgets(STDIN));
$arrayA = explode(" ", trim(fgets(STDIN)));
$count = 0;
for($i = 0;$i < $N - 1;$i++){
    if($arrayA[$i] < $arrayA[$i + 1]){
        $count++;
    }
}

echo $count;
?>