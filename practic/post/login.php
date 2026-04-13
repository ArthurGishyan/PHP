<?php
declare(strict_types= 1);

$result = [];
$errors = [];
$success = false;

$username = "";
$password = "";
$email = "";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"] ?? '');

    if(empty($username) || empty($password) || empty($email)) {
        $errors[] = "Missing empty values";
    } elseif(strlen($username) < 3) {
        $errors[] =  "Username too short";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password is too short";
    } else {
        $success = true;
    }
}


?>
<?php if($success): ?>
    <p style="color: green"> welcome, <?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?> </p>
<?php else: ?>
    <?php if(!empty($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <p style="color: red">
                <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endforeach; ?>
<?php endif; ?>

<form method="POST">
    <label>
        username:<br>
         <input type="text" name="username" value="<?= htmlspecialchars($username ?? '', ENT_QUOTES, 'UTF-8') ?>">
    </label><br><br>
    <label>password: <br>
        <input type="password" name="password">    
    </label> <br><br>
    <label>
        email: <br> 
        <input type="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8')?>">
    </label>
    
    <button type="submit">Enter</button>
</form>
<?php endif; ?>