<?php

// global scope
$name = "Alham";

function sayHello()
{
    global $name; // global keyword
    echo $name . PHP_EOL;
}

sayHello();

// local scope
function createName()
{
    $name = "Alham"; // local scope
}

createName();
echo $name . PHP_EOL;