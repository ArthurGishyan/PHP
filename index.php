<?php
echo "<body style='background-color: black; color: white;'>";

$userName = "User1";
$userAge = 18;
$city = "Yerevan";

echo $userName, " ", $userAge, " years old from ", $city;

//zval can contain int string bool floan null

//var_dump
$stringVar = "String";
$intVar = 1;
$boolVar = true;
$floatVar = 1.25;
$nullVar = null;

var_dump($stringVar);
echo "<br>";
var_dump($intVar);
echo "<br>";
var_dump($boolVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($nullVar);
//string(6) "String" int(1) bool(true) float(1.25) NULL

//we can easily change data type
$numberString = "18";

$mathOperation = $numberString + 2;
echo $mathOperation; //20

var_dump($mathOperation); //int(20)

//practic
$apples = "5";
$bananas = 3;
$total = $apples + $bananas;
echo "<br>";
var_dump($total); //int(8)
echo "<br>";

//switch case analog match
$httpStatusCode = 404;

$message = match ($httpStatusCode) {
    200 => "OK",
    404 => "Not Found",
    default => "status undefined",
};

var_dump($message);// string(12) "Server error"
echo "<br>";
echo $message; //server error
echo "<br>";

$orderAmount = 5000;
$discountAmount = 0;

if ($orderAmount >= 10000) {
    $discountAmount = 15;
    echo "Your discount is $discountAmount%";
}
elseif ($orderAmount >= 100000) {
    $discountAmount = 20;
    echo "Your discount is $discountAmount%";
}
else {
    echo "you don`t have discount";
}

//. and .=
echo "<br>";
$firstText = "Hello";
$secondText = "World";

$combinedText = $firstText . $secondText; // hello world
echo $combinedText;
echo "<br>";
//!text
$firstText .= "!";
$resultText = $firstText;
echo $resultText; //hello!

