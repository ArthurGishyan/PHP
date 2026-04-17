<?php
declare(strict_types = 1);

$fd = fopen("file.php", 'r') or die("can`t open the file");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    echo $str . "<br />"; //<?php declare(strict_types= 1); echo "hello from file";
}
fclose($fd);

$file = htmlentities(file_get_contents("file.php"));
echo $file;

