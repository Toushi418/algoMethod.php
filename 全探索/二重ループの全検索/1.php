<?php
$N = trim(fgets(STDIN));
$array = explode(" ", trim(fgets(STDIN)));

$countPrimeNumber = 0;

for ($i = 0; $i < $N; $i++)
{
    $count = 0;
    for($j = 2;$j < $array[$i];$j++)
    {
        if($array[$i] % $j == 0)
        {
            $count++;
        }
        
    }
    if($count == 0 && $array[$i] != 1)
    {
        $countPrimeNumber++;
    }
}

echo $countPrimeNumber;
?>