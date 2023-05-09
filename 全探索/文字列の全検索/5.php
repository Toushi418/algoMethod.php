<?php
$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));

if(strpos($S,$T) === 0 || strpos($S,$T) > 0){
    echo "Yes";
}else{
    echo "No";
}
?>