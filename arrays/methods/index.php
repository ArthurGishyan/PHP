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
    ["name" => "Health Potion", "weight" => 0.5, "qty" => 5],
    ["name" => "Iron Sword", "weight" => 3.0, "qty" => 1],
    ["name" => "Gold Coins", "weight" => 0.01, "qty" => 200] 
];

$totalWeight = array_reduce($inventory, function($sum, $item) {
    return $sum + ($item["weight"] * $item["qty"]);
}, 0);
echo "Total weight". $totalWeight;

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

//count or sizeof
$cars = ["BMW", "Audi", "Mercedes"];

echo "Total cars: " . count($cars);
echo "<br>";
echo "Total cars: " . sizeof($cars);
echo "<br>";

$fruits = ["Apple", "Banana", "Orange", "Grapes"];
echo "In my cart: " . count($fruits) . " fruits";

//in_array array_search
//in_array returns true if the value exists in the array, otherwise false
$foods = ["Pizza", "Burger", "Pasta"];

if (in_array("Burger", $foods)) {
    echo "I have Burger in my menu";
} else {
    echo "I don't have Burger in my menu";
}

echo "<br>";

//array_search returns the index of the value if found, otherwise false
$index = array_search("Pasta", $foods);
if ($index !== false) {
    echo "Pasta is at index: " . $index;
} else {
    echo "Pasta is not in the menu";
}

echo "<br>";

//array_replace array_replace_recursive allows us to replace values in an array with values from another array. If the key exists in both arrays, the value from the second array will overwrite the value from the first array. If the key does not exist in the first array, it will be added.

$default = [
    "theme" => "light",
    "language" => "ru",
    "privacy" => [
        "show_email" => false,
        "show_phone" => false,
        "allow_messages" => "all"
    ],
    "status" => "active"
];

$user = [
    "theme" => "dark",
    "privacy" => [
        "show_email" => true,
        "allow_messages" => "friends"
    ]
];

$admin = [
    "status" => "blocked",
    "privacy" => [
        "show_email" => false
    ]
];

$finalSettings = array_replace_recursive($default, $user, $admin);
print_r($finalSettings);

//array_push array_pop
$emptyArray = [];
array_push($emptyArray, "first", "second", "third");
print_r($emptyArray);

echo "<br>";
$popEl = array_pop($emptyArray);
print_r($emptyArray);
echo "<br><br>";
echo "Popped element: " . $popEl;

//array_shift array_unshift
$array = ["second", "third"];
array_unshift($array, "first");
print_r($array);

echo "<br>";

$shiftedEl = array_shift($array);
print_r($array);
echo "<br>";
echo "Shifted element: " . $shiftedEl;

echo "<br><br>";

//array_merge array_combine
//array_merge merges two or more arrays into one array. If the input arrays have the same string keys, then the later value for that key will overwrite the previous one. If the arrays contain numeric keys, the later values will not overwrite the original values, but will be appended.
//array_combine creates an array by using one array for keys and another for its values. Both arrays must have the same number of elements.
$countries = ["USA", "Germany", "France"];
$capitals = ["Washington", "Berlin", "Paris"];

$merged = array_merge($countries, $capitals);
print_r($merged);

echo "<br><br>";

if (count($countries) === count($capitals)) {
    $combined = array_combine($countries, $capitals);
    print_r($combined);
}

echo "<br><br>";

//array_slice array_splice
$letters = ["A", "B", "C", "D", "E"];
$sliced = array_slice($letters, 2, 2); //C D
print_r($sliced);

echo "<br><br>";
$spliced = $letters;
array_splice($spliced, 1, 2, ["X", "Y"]);
print_r($spliced);

echo "<br><br>";

//array_intersect array_diff
$array1 = ["A", "B", "C", "D"];
$array2 = ["C", "D", "E", "F"];
$intersected = array_intersect($array1, $array2);
print_r($intersected);//C D because they are common in both arrays

echo "<br><br>";

$diff = array_diff($array1, $array2);
print_r($diff);//A B because they are in array1 but not in array2

echo "<br><br>";

$allProducts = ["Laptop", "Phone", "Tablet", "Monitor"];
$availableProducts = ["Phone", "Tablet"];
$unavailable = array_diff($allProducts, $availableProducts);
print_r($unavailable);//Laptop Monitor because they are in allProducts but not in availableProducts

echo "<br><br>";

//array_unique
$numbers = [1, 2, 3, 2, 4, 1, 5];
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers);//1 2 3 4 5 because they are unique
