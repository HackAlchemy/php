<?php
$first = [
    "first_name" => "Alham"
];

$last = [
    "last_name" => "Manazil"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Alham",
    "last_name" => "Manazil"
];

$b = [
    "last_name" => "Manazil",
    "first_name" => "Alham"
];

var_dump($a == $b);
var_dump($a === $b);