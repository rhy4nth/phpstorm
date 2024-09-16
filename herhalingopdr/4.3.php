<?php
$pets = [
    "pet1" => ["species" => "Hond", "name" => "Buddy", "age" => 3],
    "pet2" => ["species" => "Papegaai", "name" => "Coco", "age" => 6],
    "pet3" => ["species" => "Konijn", "name" => "Nibbles", "age" => 2],
];

echo $pets["pet3"]["name"] . " is een " . $pets["pet3"]["species"] . "\n";

$pets["pet2"]["age"] += 1;

$pets["pet4"] = ["species" => "Kat", "name" => "Simba", "age" => 2];

print_r($pets)

