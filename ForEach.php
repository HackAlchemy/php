<?php

$names = ["Alham", "Ali", "Abdul"];

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

$person = [
    "first_name" => "Alham",
    "last_name" => "Manazil",
    "age" => 20
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}