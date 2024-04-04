<?php

$name = "Alham Manazil";

echo "Name\t: " . $name . PHP_EOL;
echo "Value\t: " . 100 . PHP_EOL;
echo "\n";

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"250";
var_dump($valueInt);

$valueFloat = (float)"30.2";
var_dump($valueFloat);

$name = "ALHAM";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

echo "Hello $name, Happy Learning" . PHP_EOL;

echo "Hello M27-{$name}, Happy Learning" . PHP_EOL;
