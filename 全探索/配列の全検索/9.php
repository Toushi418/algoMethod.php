<?php
$N = trim(fgets(STDIN));
$arrayA = explode(" ", trim(fgets(STDIN)));
$arrayNum = [
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
    6 => 0,
    7 => 0,
    8 => 0,
    9 => 0,
];

for($i = 0;$i < $N;$i++){
    $add = $arrayA[$i];
    $arrayNum[$add] += 1; 
}

foreach($arrayNum as $num){
    echo $num . "\n";
}
?>