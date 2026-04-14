<?php
declare(strict_types=1);
session_start();

if (empty($_SESSION['username'])) {
    header('Location: register.php');
    exit();
}

$username = $_SESSION['username'];
$safeName = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
$targetPhotoPath = 'uploads/' . $username . '.jpg';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['avatar'])) {
    $file = $_FILES['avatar'];

    if ($file['error'] === 0) {
        if ($file['size'] > 2 * 1024 * 1024) {
            $_SESSION['error_msg'] = "File is too large! Maximum 2 MB.";
        } 
        else {
            $mimeType = mime_content_type($file['tmp_name']);
            if (strpos((string)$mimeType, 'image/') === 0) {
                move_uploaded_file($file['tmp_name'], $targetPhotoPath);
                $_SESSION['success_msg'] = "Profile photo updated successfully!";
            } else {
                $_SESSION['error_msg'] = "You can only upload images!";
            }
        }
    } else {
        $_SESSION['error_msg'] = "Please select a file before uploading.";
    }
    
    header('Location: profile.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile: <?= $safeName ?></title>
</head>
<body>

    <div class="profile-card">
        <h2>Profile: <?= $safeName ?></h2>

        <?php if (file_exists($targetPhotoPath)): ?>
            <img src="<?= htmlspecialchars($targetPhotoPath) ?>?v=<?= time() ?>" alt="Avatar" class="avatar">
        <?php else: ?>
            <div class="avatar" style="display: inline-block; line-height: 150px; color: gray;">No photo</div>
        <?php endif; ?>

        <?php if(!empty($_SESSION['error_msg'])): ?>
            <p style="color: red;"><?= htmlspecialchars($_SESSION['error_msg']) ?></p>
            <?php unset($_SESSION['error_msg']); ?>
        <?php endif; ?>

        <?php if(!empty($_SESSION['success_msg'])): ?>
            <p style="color: limegreen;"><?= htmlspecialchars($_SESSION['success_msg']) ?></p>
            <?php unset($_SESSION['success_msg']); ?>
        <?php endif; ?>

        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="avatar" accept="image/png, image/jpeg" style="margin-bottom: 10px;">
            <button type="submit">Upload photo</button>
        </form>
        
        <br><br>
        <a href="register.php" style="color: gray; text-decoration: none; font-size: 14px;">← Back to home</a>
    </div>

</body>
</html>