<?php
declare(strict_types=1);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();
    session_destroy();
    setcookie('theme_color', '', time() - 3600);
    header('Location: index.php');
    exit();
}

if (empty($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$safeName = htmlspecialchars($_SESSION['username']);
$safeColor = htmlspecialchars($_COOKIE['theme_color'] ?? '#ffffff');
?>

<body style="background-color: <?= $safeColor ?>">

    <h1>Welcome, <?= $safeName ?>!</h1>
    <p>Your profile now looks exactly as you configured it.</p>

    <br><br>

    <form action="dashboard.php" method="POST">
        <button type="submit" style="padding: 10px 20px; cursor: pointer;">
            Reset settings and exit
        </button>
    </form>

    <pre>
        <?php print_r($_COOKIE); ?>
    </pre>
    
</body>