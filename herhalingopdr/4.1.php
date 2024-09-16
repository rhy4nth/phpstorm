<?php
////$students = [
////    ["Jan", 20, "A"],
////    ["Piet", 22, "B"],
////    ["Kees", 21, "A"]
////];
////echo "<pre>";
////echo $students[2][0] = 'Eva';
////var_dump($students);
//$students = [
//    "student1" => ["name" => "Jan", "age" => 20, "grade" => "A"],
//    "student2" => ["name" => "Piet", "age" => 22, "grade" => "B"],
//    "student3" => ["name" => "Kees", "age" => 21, "grade" => "A"]
//];
//echo $students["student1"]["name"] = "Eva"
//var_dump($students);

//$cars = [
//    [ "brand" => "Toyota", "model" => "Corolla", "price" => 20000 ],
//    [ "brand" => "Honda", "model" => "Civic", "price" => 22000 ],
//    [ "brand" => "Ford", "model" => "Focus", "price" => 21000 ]
//];
//
//echo $cars[0]["brand"];

$products=[
    "product1" => ["name" => "laptop", "price" => 999.99, "quantity" => "30"],
    "product2" => ["name" => "smartphone", "price" => 699.99,"quantity" => "50"],
    "product3" => ["name" => "monitor", "price" => 199.99, "quantity" => "75"],
    "product4" => ["name" => "toetsenbord", "price" => 49.99, "quantity" => "120"],
    "product5" => ["name" => "iphone", "price" => 399.99, "quantity" => "50"],
];
echo $products["product2"]["price"]["name"];
echo $products["product4"]["quantity"]=120;
echo $products["product5"] => ["name" => "Tablet", "price" => 299.99, "quantity" => "10"];

print_r($products);
?>