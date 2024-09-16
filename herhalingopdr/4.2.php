<?php
$books = [
    "book1" => ["title" => "1984", "author" => "George Orwell", "pages" => 328],
    "book2" => ["title" => "Brave New World", "author" => "Aldous Huxley", "pages" => 311],
    "book3" => ["title" => "Fahrenheit 451", "author" => "Ray Bradbury", "pages" => 256]
];
echo $books["book2"]["title"]."is geschreven door".$books["book2"]["author"]."\n";

$books["book1"]["pages"]=350;

$books["book4"]=["title" => "De ontdekking van de hemel", "author" => "Harry Mulisch", "pages" => 900];

print_r($books);
?>