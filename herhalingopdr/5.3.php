<?php
$guessedNumber = 0;

do {$guessedNumber = rand(1, 10);
    echo "Geraden: " . $guessedNumber . "\n";
} while ($guessedNumber != 5);

