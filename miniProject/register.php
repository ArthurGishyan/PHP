<?php
declare(strict_types=1);
session_start();

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    function saver(string $username, string $email, string $password) : void {
        $passwordToHash = password_hash($password, PASSWORD_DEFAULT);
        $userInfo = "$username | $email | $passwordToHash" . PHP_EOL;
        file_put_contents("users.txt", $userInfo, FILE_APPEND);
    }


    if(empty($username) || empty($password) || empty($email)) {
        $errors[] = 'All values are required.';
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }
    if(empty($errors)) {
        saver($username, $email, $password);
        $_SESSION['username'] = $username;
        $_SESSION['success_msg'] = "Registration successful, $username!";
        header('Location: profile.php');
        exit();
    }
}
?>

<?php if(!empty($errors)): ?>
    <?php foreach($errors as $error): ?>
        <p style="color: red; text-decoration: bold;">Error: <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?? '' ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<?php if(!empty($_SESSION['success_msg'])): ?>
    <p style="color: limegreen; font-weight: bold;"><?= htmlspecialchars($_SESSION['success_msg'])?></p>
    <?php unset($_SESSION['success_msg']); ?>
<?php endif; ?>

<form action="" method="post">
    <label for="username">Enter username: </label>
    <input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"> 
    
    <label for="password">Enter password: </label>
    <input type="password" name="password"> 
    
    <label for="email">Enter email: </label>
    <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"> 
    
    <button type="submit">login</button>
</form>
    
