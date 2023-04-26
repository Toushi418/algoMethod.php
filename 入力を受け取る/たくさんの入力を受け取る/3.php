<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));

foreach($array as $num){
    echo $num % 10 . "\n";
}
?>