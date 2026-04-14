<?php
if (isset($_GET['category'])) {
    $cat = $_GET['category'];
    echo "<h1>You selected the category: " . $cat . "</h1>";
} else {
    echo "<h1>Category not selected:</h1>";
}

if (isset($_GET['price'])) {
    echo "<p>Price filter: " . $_GET['price'] . "</p>";
}
?>

<hr>
<h3>Try clicking these links:</h3>
<a href="index.php?category=shoes">Show Shoes</a> <br>
<a href="index.php?category=phones&price=high">Show Expensive Phones</a> <br>
<a href="index.php">Clear filters</a>