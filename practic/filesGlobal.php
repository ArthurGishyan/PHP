<?php 
declare(strict_types= 1);

$errors = [];
$success = false;
$newName = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["avatar"];

    if ($file["error"] !== 0) {
        $errors[] = "Upload error";
    }
    if ($file["size"] > 2*1024*1024) {
        $errors[] = "File is very big";
    }

    $extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $whiteList = ['jpg', 'png'];

    if (!in_array($extension, $whiteList, true)) {
        $errors[] = "Upload only jpg or png extension";
    }

    if(empty($errors)) {
        $newName = uniqid("avatar_", true) . "." . $extension;
        move_uploaded_file($file['tmp_name'], 'uploads/' . $newName);
        $success = true;
    }
}

?>

<?php if($success): ?>
    <p style="color:green">Uploaded <?= htmlspecialchars($newName, ENT_QUOTES, 'UTF-8') ?></p>
<?php else: ?>
    <?php foreach ($errors as $error): ?>
            <p style="color: red">Occured Error: <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endforeach; ?> 
       
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="avatar">
    <button type="submit">Upload</button>
</form>

<?php endif ?>