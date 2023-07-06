<?php
$S = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

if(strpos($S,$c)){
    echo "Yes";
}else{
    echo "No";
}
?>