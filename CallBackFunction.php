<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Alham", "strtoupper");
sayHello("Alham", "strtolower");
sayHello("Alham", function (string $name): string {
    return strtoupper($name);
});
sayHello("Alham", fn ($name) => strtoupper($name));