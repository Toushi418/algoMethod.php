<?php
$N = trim(fgets(STDIN));
$count = 0;
for($i = 1;$i <= $N;$i++){
    if($i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0){
        $count++;
    }
}
echo $count;
?>