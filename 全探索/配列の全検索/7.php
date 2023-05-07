<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));


$result = array_search(max($array),$array);
echo $result;
?>