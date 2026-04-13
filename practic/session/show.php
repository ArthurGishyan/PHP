<?php
declare(strict_types= 1);
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();
    session_destroy();
    header('Location: session.php');
    exit();
}

if(empty($_SESSION['name'])) {
    header('Location: session.php');
    exit();
}

$userName = htmlspecialchars($_SESSION['name']);
$loginTime = htmlspecialchars($_SESSION['time']);

?>

<h2>Hello, <?= $userName ?>!</h2>
<p>You are here from <?= $loginTime ?></p>

<form action="show.php" method="POST">
    <button type="submit">Exit</button>
</form>