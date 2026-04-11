<?php
declare(strict_types=1);

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $rawLogin = $_POST["username"] ?? "";
    $rawPassword = $_POST["user_pass"] ?? "";

    $cleanLogin = htmlspecialchars(trim($rawLogin));
    $cleanPassword = htmlspecialchars(trim($rawPassword));
    if ($cleanLogin === "Admin" && $cleanPassword === "123456") {
        $message = "<h3 style='color: green;'>Բարի գալուստ, Հարգելի $cleanLogin!</h3>";
    } else {
        $message = "<h3 style='color: red;'>Սխալ մուտքանուն կամ գաղտնաբառ:</h3>";
    }
}
?>

<hr>
<?= $message ?>

<form method="POST" action="">
    <label>Մուտքանուն:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Գաղտնաբառ:</label><br>
    <input type="password" name="user_pass" required><br><br>

    <button type="submit">Մուտք գործել</button>
</form>

<?php

echo "<hr><h4>$_POST Զանգվածի պարունակությունը:</h4><pre>";
var_dump($_POST);
echo "</pre>";
?>