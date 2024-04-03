<?php
$values = array(1, 2, "Alham");
var_dump($values);
echo "\n";

$names = array("Alham", "Manazil");
var_dump($names);
echo "\n";

var_dump($names[1]);
echo "\n";

$names[0] = "Eko";
var_dump($names);
echo "\n";

unset($names[0]);
var_dump($names);
echo "\n";

$names[] = "Alham";
var_dump($names);
var_dump(count($names));
echo "\n";

$alham = array(
    "id" => 1,
    "name" => "Alham Manazil",
    "age" => 21,
    "address" => array(
        "city" => "Kudus",
        "country" => "Indonesia"
    )
);

var_dump($alham);
echo "\n";
var_dump($alham["address"]["city"]);