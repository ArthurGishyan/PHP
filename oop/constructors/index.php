<?php

class logger {
    function __construct(public $file) {
        $this->file = $file;
        echo "Opening " . $this->file . "<br>";
    }

    function __destruct()
    {
        echo "Closing" . $this->file . "<br>";
    }
}
$logger = new logger("hash");

echo "<br><br>";

class car {
    public $brand, $model;

    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    function info() {
        echo $this->model . " belongs " . $this->brand . "<br>";
    }

    function __destruct()
    {
        echo $this->brand . " destructed!";
    }
}

$mercedess = new car("Mercedess", "CLS");
$mercedess->info();

echo "<br><br>";

class session {
    function __construct(public $user = "guest") {
        $this->user = $user;
        echo "Seans started for " . $user . "<br><br>";
    }
}

$nameless = new session();
$admin = new session("Admin");
