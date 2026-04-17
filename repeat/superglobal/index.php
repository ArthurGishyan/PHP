<?php
declare(strict_types=1);

$name  = "You are not entered the name";
$age = "You are not entered the age";

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
if (isset($_GET['age'])) {
    $age = $_GET['age'];
}

echo "Name: " . $name . "<br />";
echo "Age: ". $age;