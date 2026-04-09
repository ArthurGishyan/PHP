<?php

$totalSum = 0;

$cart = [
    [
        "Brand" => "BMW",
        "Model" => "X5",
        "Price" => 50000
    ],
    [
        "Brand" => "Audi",
        "Model" => "A4",
        "Price" => 40000
    ],
    [
        "Brand" => "Mercedes",
        "Model" => "C-Class",
        "Price" => 45000
    ]
];

foreach ($cart as $price) {
    $totalSum = $price["Price"];
    var_dump($totalSum);
}
echo $cart[0]; //will print Array
//to print first el we use print_r
print_r($cart[0]); //will print the first element of the array