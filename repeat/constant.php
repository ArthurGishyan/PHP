<?php
declare(strict_types= 1);

const A = 1;
echo A+1;

echo __FILE__ . "<br />";
echo __LINE__ . "<br />";
echo __DIR__ . "<br />";
echo __NAMESPACE__ . "<br />";

$os = array("Windows 11", "windows 7" ,"Windows 8", "Windows 10");
natcasesort($os);
print_r($os);

$float = 1.55;
echo gettype($float);