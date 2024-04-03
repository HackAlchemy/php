<?php

$name = "Alham";
$name = null;

$age = null;

echo "Name: "; $name;
echo "Age: "; $age;
echo "\n\n";

$name = "Manazil";
echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Manazil";
unset($contoh);

$contoh = "Alham";
$contoh = null;

echo "Is Contoh Null? : ";
var_dump(isset($contoh));
echo "\n";

