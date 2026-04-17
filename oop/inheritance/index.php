<?php
declare(strict_types= 1);

class Device {
    public $device;

    public function deviceInfo() {
        echo $this->device . " turned on <br>";
    }
}

class Smartphone extends Device {
    public $number;
    public function deviceInfo()
    {
        parent::deviceInfo();
    }
    public function callNumber() {
        echo $this->device . " made call to " . $this->number . "<br>";
    }
}

$myPhone = new Smartphone();
$myPhone-> device = "Iphone";
$myPhone->number = "+374-77-80-14-01";
$myPhone->deviceInfo();
$myPhone->callNumber();

echo "<br><br>";

class BankAccount {
    private $balance = 0;
    protected $bank;

    public function __construct($bank) {
        $this->bank = $bank;

        echo $this->bank . " can`t change your balace, it is: " . $this->balance . "<br>";
    }
    public function deposit($amount) {
        if ($this->balance >= 0) {
            $this->balance += $amount;
            echo "maded deposit: " . $amount . " your balance is " . $this->balance . "<br>";
        }
        else {
            echo "Your balance is 0 <br>";
        }
    }
    public function getBalance() {
        return $this->balance;
    }
}
$accountid = new BankAccount("Ameria");
$accountid->deposit(1000);
$accountid->deposit(1000);
$accountid->getBalance();

echo "<br><br>";

class User {
    function __construct(protected $name)
    {

    }

    public function getPermission(array $permission = ['read']) {
        return $permission;
    }
}

class Admin extends User {
    public function __construct(protected $name) {
        $this->name = $name;
    }
    public function getPermission(array $permission = ['read'])
    {
        $perms = parent::getPermission($permission);
        $perms[] = 'execute';
        $perms[] = 'write';
        return $perms;
    }

}
$admin = new Admin("Arthur");
print_r($admin->getPermission());