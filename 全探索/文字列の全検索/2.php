<?php
$S = trim(fgets(STDIN));
if($S === strrev($S)){
    echo "Yes";
}else{
    echo "No";
}
?>