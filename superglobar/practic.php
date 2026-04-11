<?php
declare(strict_types= 1);

echo "<h1>practic.php</h1><br>";

if (isset($_GET["search_query"])) {
    $cleaned = trim(htmlspecialchars($_GET["search_query"]));
    echo "You searched for: " . $cleaned;
}

?>

<a href="practic.php?search_query=hello">Show Hello</a> <br>

<?php
//post
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $customerName = trim(htmlspecialchars($_POST["customer_name"] ?? ""));
    $promocode = trim(htmlspecialchars($_POST["promocode"] ?? ""));
    if ($promocode === "SECRET50") {
        echo "<h2 style='color: green;'>Congratulations, $customerName! You have received a 50% discount!</h2>";
    }
    else {
        echo "<h2 style='color: red;'>Sorry, $customerName. The promocode you entered is invalid.</h2>";
}
}

?>

<form method="POST">
    <label>Customer Name:</label><br>
    <input type="text" name="customer_name" id=""><br>
    <label>Promo Code:</label><br>
    <input type="text" name="promocode" id=""><br>
    <button type="submit" value="Submit">Submit</button>
</form>