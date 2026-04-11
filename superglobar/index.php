<?php
if (isset($_GET['category'])) {
    $cat = $_GET['category'];
    echo "<h1>Դուք ընտրել եք կատեգորիան. " . $cat . "</h1>";
} else {
    echo "<h1>Կատեգորիա ընտրված չէ:</h1>";
}

if (isset($_GET['price'])) {
    echo "<p>Գնի ֆիլտր. " . $_GET['price'] . "</p>";
}
?>

<hr>
<h3>Փորձիր սեղմել այս հղումներին՝</h3>
<a href="index.php?category=shoes">Ցույց տալ Կոշիկներ</a> <br>
<a href="index.php?category=phones&price=high">Ցույց տալ Թանկարժեք Հեռախոսներ</a> <br>
<a href="index.php">Մաքրել ֆիլտրերը</a>