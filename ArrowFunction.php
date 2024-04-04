<?php

$firstName = "Alham";
$lastName = "Manazil";

$anonymousFunction = function () use ($firstName, $lastName) {
    return "Hello $firstName $lastName";
};

$arrowFunction = fn () => "Hello $firstName $lastName";

echo $anonymousFunction() . PHP_EOL;
echo $arrowFunction() . PHP_EOL;