<?php
$cart = [
    ["Brand" => "BMW", "Model" => "X5", "Price" => 50000],
    ["Brand" => "Audi", "Model" => "A4", "Price" => 40000],
    ["Brand" => "Mercedes", "Model" => "C-Class", "Price" => 45000]
];

$myBudget = 45000;

$affordable = array_filter($cart, fn($car)=> $car["Price"] <= $myBudget);
print_r($affordable);
echo "<br>";

//array map
$discount = array_map(function($car) {
    $car["Price"] = $car["Price"] * 0.9; 
    return $car;
}, $cart);

print_r($discount);
echo "<br>";

$quizResults = [
    ["user" => "Player1", "score" => 85, "time_seconds" => 120],
    ["user" => "Player2", "score" => 40, "time_seconds" => 90],
    ["user" => "Player3", "score" => 95, "time_seconds" => 150],
    ["user" => "Player4", "score" => 30, "time_seconds" => 60]
];

$winners = array_filter($quizResults, fn($result) => $result["score"] >= 50);

$newStatus =array_map(function($status) {
    $status["status"] = "Winner";
    return $status;
}, $winners);

print_r($newStatus);

echo "<br>";

//array_reduce
$gameStages = [
    ["stage" => 1, "points" => 300, "bonuses" => 50],
    ["stage" => 2, "points" => 450, "bonuses" => 0],
    ["stage" => 3, "points" => 200, "bonuses" => 100]
];

$totalScore = array_reduce($gameStages, function($stage, $total) {
    return $stage + $total["points"] + $total["bonuses"];
}, 0);
echo "Total Score: " . $totalScore;
echo "<br>";

$inventory = [
    ["name" => "Зелье здоровья", "weight" => 0.5, "qty" => 5], // 5 зелий по 0.5 кг
    ["name" => "Железный меч", "weight" => 3.0, "qty" => 1],   // 1 меч на 3 кг
    ["name" => "Золотые монеты", "weight" => 0.01, "qty" => 200] // 200 монет по 0.01 кг
];

$totalWeight = array_reduce($inventory, function($sum, $item) {
    return $sum + ($item["weight"] * $item["qty"]);
}, 0);
echo "Total weight". $totalWeight;

//together
$users = [
    ["name" => " aRthur ", "email" => "arthur@test.com", "age" => 25],
    ["name" => "JOHN", "email" => "", "age" => 17],
    ["name" => "  anna", "email" => "anna@mail.com", "age" => 30]
];

$validUsers = array_filter($users, fn($user)=> $user["age"] > 18 && $user["email"] !== "");
$cleanUsers = array_map(function($user) {
    $user["name"] = ucfirst(trim(strtolower($user["name"])));
    return $user;
}, $validUsers);
print_r($cleanUsers);