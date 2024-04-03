<?php

echo "Nama : ";
echo "Alham Manazil";
echo "\n";

echo "Nama : ";
echo "Alham\tManazil";
echo "\n";

// Heredoc
echo <<<ALHAM
ini adalah contoh string yang sangat panjang,
dan juga tidak perlu ngetik ENTER secara manual,
"bisa quote" juga
ALHAM;
echo "\n\n";

// Nowdoc
echo <<<'ALHAM'
ini adalah contoh string yang sangat panjang,
dan juga tidak perlu ngetik ENTER secara manual,
"bisa quote" juga
ALHAM;