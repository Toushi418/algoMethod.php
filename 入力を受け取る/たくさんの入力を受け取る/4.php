<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));

foreach($array as $A){
    if($A % 3 === 0){
        echo $A . "\n";
    }
}
?>