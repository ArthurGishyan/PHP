<?php
declare(strict_types=1);

$a  = $_GET['a']  ?? null;
$b  = $_GET['b']  ?? null;
$op = $_GET['op'] ?? null;

if ($a !== null && $b !== null && $op !== null) {
    if ($op === "add") {
        echo $a + $b;
    } elseif ($op === "subtract") {
        echo $a - $b;
    } elseif ($op === "multiply") {
        echo $a * $b;
    } elseif ($op === "divide") {
        if ($b !== 0) {
            echo $a / $b;
        } else {
            echo "Error: Division by zero is not allowed.";
        }
    }
} else {
    echo "some parameters are missing";
}