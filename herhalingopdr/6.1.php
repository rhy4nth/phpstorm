<?php

$numbers = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numbers); $i++) {
    $originalNumber = $numbers[$i];
    $multipliedNumber = $originalNumber * 2;

    echo "Origineel getal: " . $originalNumber . "\n";
    echo "Vermenigvuldigd met 2: " . $multipliedNumber . "\n";
}
?>
