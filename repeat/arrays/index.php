<?php 
declare(strict_types=1);

$cars = [
    "Toyota" => [
        "Camry" => 30000,
        "Corolla" => 22000,
        "RAV4" => 35000
    ],
    "BMW" => [
        "X5" => 65000,
        "3 Series" => 45000
    ],
    "Audi" => [
        "A4" => 40000,
        "Q7" => 70000
    ]
];

foreach($cars as $brand => $models) {
    echo "<h1>$brand</h1>";
    echo "<ul>";

    foreach($models as $model => $price) {
        echo "<li> $model ----> $price </li>";
    }
    echo "</ul>";
}

//sort 

$myarr = ["B" => "Abstract", "C" => "B", "A"=> "C"];

ksort($myarr);
print_r($myarr);