<?php
$N = trim(fgets(STDIN));
$count = 0;
for($i = 1;$i <= $N;$i++){
    if($N % $i == 0){
        $count++;
    }
}
echo $count++;
?>