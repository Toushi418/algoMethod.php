<?php
$array = explode(" ", trim(fgets(STDIN)));
$N = $array[0];
$V = $array[1];
$arrayA = explode(" ", trim(fgets(STDIN)));

$newArray = array_map('intval',$arrayA);


echo count(array_keys($newArray,$V));
?>