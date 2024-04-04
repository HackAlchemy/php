<?php

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

function factorialRecursive(int $value): int
{
    return $value == 1 ? 1 : $value * factorialRecursive($value - 1);
}

var_dump(factorialRecursive(4));

function loop(int $value){
    if($value == 0){
        echo "End loop" . PHP_EOL;
    } else {
        echo $value . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);