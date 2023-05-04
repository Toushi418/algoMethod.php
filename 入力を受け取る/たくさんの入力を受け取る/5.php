<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));
$newArray = array_reverse($array);
foreach($newArray as $A){
    echo $A . "\n";
}
?>