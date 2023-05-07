<?php
$N = trim(fgets(STDIN));
$count = 0;
for($i = 2;$i < $N;$i++){
    if($N % $i == 0){
        $count++;
    }
    
        }
    if($count == 0 && $N != 1){
        echo "Yes";
    }else{
        echo "No";
    }
?>