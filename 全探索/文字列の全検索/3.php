<?php
$S = trim(fgets(STDIN));
$count = 0;
for($i = 0;$i < strlen($S);$i++){
    if($reccent){
        if($S[$i] == $reccent){
            $count++;
        }
    }
    $reccent = $S[$i];
}

echo $count;
?>