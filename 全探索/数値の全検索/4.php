<?php
$XY = explode(" ", trim(fgets(STDIN)));

$X = $XY[0];
$Y = $XY[1];

$smaller = 0;
if($X >= $Y){
    $smaller = $Y;
}else{
    $smaller = $X;
}

$array = [];

for($i = 1;$i <= $smaller;$i++){
    if($X % $i == 0 && $Y % $i == 0){
        $array[] = $i;
    }
}

echo $array[count($array) - 1];
?>