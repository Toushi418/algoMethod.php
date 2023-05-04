<?php
$array = explode(" ", trim(fgets(STDIN)));

echo array_sum($array) / count($array);
?>