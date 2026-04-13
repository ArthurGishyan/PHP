<?php
declare(strict_types=1);
session_start();

$success = false;
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);

    if(empty($username)) {
        $errors[] = 'empty username';
    }
    if(empty($errors)) {
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['time'] = date('Y-m-d H:i:s');
        $success = true;
        header('Location: show.php');
        exit();
    }
}
?>

<?php if(!empty($errors)): ?>
    <?php foreach($errors as $error): ?>
        <p style="color: red">Error occured: <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endforeach; ?>
<?php endif; ?> <form action="session.php" method="POST">
    <label for="username">Enter username</label>
    <input type="text" name="username">
    <button type="submit">Enter</button>
</form>


