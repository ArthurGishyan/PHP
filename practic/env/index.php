<?php
declare(strict_types=1);

function loadEnv(string $path): void {
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}
loadEnv(__DIR__ . '/.env');

$mode = $_ENV['APP_MODE'] ?? 'live';
$adminIp = $_ENV['ADMIN_IP'] ?? '';

$visitorIp = $_SERVER['REMOTE_ADDR'];

if ($mode === 'maintenance' && $visitorIp !== $adminIp) {
    die('<h1 style="color: red; text-align: center; margin-top: 100px;">
            SITE UNDER MAINTENANCE!
         </h1>
         <p style="text-align: center;">We will be back soon.</p>');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body style="font-family: sans-serif; text-align: center; padding-top: 50px;">
    
    <h1 style="color: green;">Welcome!</h1>
    <p>Website is running normally.</p>
    
    <hr style="max-width: 400px; margin: 30px auto;">
    
    <p style="color: gray; font-size: 14px;">
        Your IP: <b><?= htmlspecialchars($visitorIp) ?></b><br>
        Website mode: <b><?= htmlspecialchars($mode) ?></b>
    </p>

</body>
</html>