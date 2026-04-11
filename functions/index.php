<?php
declare(strict_types=1); //we have to save type hinting

function greet(string $name, int $age) : string {
    return "Hello $name you are $age years old";
}
echo greet("Arthur", 19);
echo "<br>";
function createButton(string $text, string $color = "blue", bool $isDisabled = false) : string {

    $statusString = $isDisabled ? 'true' : 'false';

    return "Button: " . $text . "| Color: " . $color . "| IsDisabled: " . $statusString;
}
echo createButton(text: "Launch", isDisabled: true); //if we want set parameter by default
echo "<br>";

//practical
//...(rest), Nullable and Union Types, static, callback, recursion
function findMaxNumber(int|float ...$numbers) : int|float {
    return max($numbers);
}
var_dump(findMaxNumber(1,2,3,55,618,5,4,2)); //int(618)
echo "<br>";

function showMessage(?string $message) : void {
    static $callNumber = 0;
    if ($message) {
        $callNumber++;
    }
    echo "message " .$callNumber . ": " . $message;
}

showMessage("server loading...");
showMessage("waiting...");
showMessage("loaded!");
echo "<br>";

//callback
function doMath(?int $a, ?int $b, callable $operation) : int|float{
    return $operation($a,$b);
}

$add = fn(int $a, int $b) => $a + $b;
$multiply = fn(int $a, int $b) => $a * $b;
$divide = fn(int $a, int $b) => $a / $b;

var_dump(doMath(5,2, $divide));
var_dump(doMath(5,2, $add));
var_dump(doMath(5,2, $multiply));
echo "<br>";

//recursion
function sumDown(int $n) : int {
    if ($n <= 1) return 1;
    return $n + sumDown($n - 1);
}
echo sumDown(6);//21
echo "<br>";

function power(int $x, int $n) : int|float {
    if ($x === 0) return 0;
    if($n === 0) return 1;
    elseif ($n === 1) return $x;

    return $x * power($x, $n - 1);
}
echo power(2,3);

//global and local scope
$score = 100; //global variable

function addBonus() {
    global $score;
    $score += 50;
    echo $score;
} 
addBonus();

function calcArea(int $width, int $height) : int {
    return $width * $height;
}
echo "<br>";
echo calcArea(5, 10);
