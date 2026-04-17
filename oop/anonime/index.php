<?php
declare(strict_types= 1);

$animal = new class {
    public $type;
    function makeSound() {
        echo $this->type . " make sound";
    }
};

$animal->type = "dog";
$animal->makeSound();

echo "<br><br>";

$user = new class('Arthur') {
    function __construct(public $login = 'guest')
    {
        $this->login = $login;
        echo "login apply <br>";
    }
    function greetUser() 
    {
        echo "Hello " . $this->login . "<br>";
    }
    function __destruct()
    {
        echo "class destructed!";
    }
};

$user->greetUser();

