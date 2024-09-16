<?php
$prices = [100, 200, 300, 400, 500];

$i = 0;
while ($i < count($prices) && $prices[$i] < 500) {
    $originalPrice = $prices[$i];
    $newPrice = $originalPrice + 50;

    echo "Oorspronkelijke prijs: " . $originalPrice . "\n";
    echo "Nieuwe prijs: " . $newPrice . "\n\n";
    $i++;
}
?>
