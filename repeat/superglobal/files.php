<?php
declare(strict_types=1);

if($_FILES) {
    foreach($_FILES["images"]["error"] as $key => $error) {
        if($error === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["images"]["tmp_name"][$key];
            $name = $_FILES["images"]["name"][$key];
            move_uploaded_file($tmp_name, $name);
        }
    }
    echo "uploaded to your dir";
}
?>

<h1>File uploadeing</h1>
<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="images[]" /> <br />
    <input type="file" name="images[]" /> <br />
    <input type="file" name="images[]" /> <br />
    <input type="file" name="images[]" /> <br />
    <button type="submit">submit</button>
</form>