<?php
declare(strict_types=1);
//for loop allows us to execute a block of code a specified number of times

for($i = 2; $i <= 20; $i +=2) {
    var_dump($i);
}
echo "<br>";

for($i = 2; $i <= 20; $i++) {
    if($i % 2 == 0) {
        var_dump($i);
    }
}
echo "<br>";
//while loop
$balance = 100;
while(true) {
    $balance -= 30;
    if($balance <= 0) {
        echo "You expired your balance <br>";
        break;
    }
    echo("Your balance is $balance <br>");
}

//nested loops
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo "Week $i, Day $j <br>";
    }
    echo "<br>";
}