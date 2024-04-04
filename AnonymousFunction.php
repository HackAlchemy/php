<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Alham");

function sayGoodbye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;
}

sayGoodbye("Alham", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name) {
    return strtoupper($name);
};

sayGoodbye("Alham", $filterFunction);

$firstName = "Alham";
$lastName = "Manazil";

$sayHelloAlham = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAlham();