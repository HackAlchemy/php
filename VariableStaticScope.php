<?php

function increment()
{
    static $counter = 1; // static scope
    echo $counter . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();