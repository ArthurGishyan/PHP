<?php
declare(strict_types= 1);
session_start();

$errors = [];
$success = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $option = $_POST['option'];

    if(empty($username) || empty($option)) {
        $errors[] = 'Username or option empty';
    }
    if(empty($errors)) {
        $_SESSION['username'] = $username ?? '';
        $_SESSION['option'] = $option ?? '';
        $success = true;
        header('Location: dashboard.php');
        exit();
    }
}

?>


<?php if(!empty($errors)): ?>
    <?php foreach($errors as $error): ?>
        <p style="color: red"> Error: <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p style="color: cyan"> Hello <?= $_SESSION['username'] ?></p> 
<?php endif; ?>


<form action="settings.php" method="POST">
<label>Name: <input type="text" name="username"></label>
<br><br>
    
<label>Background Color:
    <select name="option">
        <option value="">-- Select a color --</option>
        <option value="lightblue">Light Blue</option>
        <option value="lightgreen">Light Green</option>
        <option value="pink">Pink</option>
        <option value="lightgray">Gray</option>
    </select>
</label>
<br><br>
        
<button type="submit">Save</button>
</form>