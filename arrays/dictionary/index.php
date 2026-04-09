<?php
$laptops = [
    "Apple" => "Macbook Air",
    "Asus" => "Zenbook",
    "Google" => "Pixelbook",
    "Microsoft" => "Surface Laptop"
];

foreach ($laptops as $brand => $laptop) {
    echo "Brand: $brand, Laptop: $laptop <br>";
}