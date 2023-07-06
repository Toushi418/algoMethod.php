<?php
$array = explode(" ", trim(fgets(STDIN)));
$N = $array[0];
$K = $array[1];

$answer = 0;

for ($i = 1; $i <= $N; $i++)
{
    $count = 0;
    for($j = 1; $j <= $i; $j++)
    {
        if ($i % $j == 0)
        {
            $count++;
        }
    }
    if($count == $K)
    {
        $answer++;
    }
}

echo $answer;
?>