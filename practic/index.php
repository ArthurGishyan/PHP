<?php
declare(strict_types= 1);

$firstname = "Arthur";
$lastname = "Gishyan";
$age = 19;
$salary = 1000;
$isEmployed = true;
$employmentStatus = $isEmployed ? "Working" : "Not working";

echo "Name: " . $firstname . " " . $lastname . "<br><br>";
echo "Age: " . $age . "<br><br>";

if ($age >= 18) {
    echo "Salary: $" . $salary . "<br><br>";
} else {
    echo "Salary: Not applicable <br><br>";
}

echo "Employment Status: " . $employmentStatus . "<br><br>";