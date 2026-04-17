<?php

$username = "You are not entered the name!";
$userage = "You are not entered the age!";

if (isset($_POST["username"])) {
    $username = $_POST["username"];
}
if (isset($_POST["userage"])) {
    $userage = $_POST["userage"];
}
echo "Name: " . $username ."<br />"."Age: ". $userage ."";

//we can also input arrays

$users = [];

if (isset($_POST["users"])) {
    $users = $_POST["users"];
}
echo "<br />" . "There is " . count($users) . "users <br/>";

//checkboxes

if (isset($_POST["websites"])) {
    $websites = $_POST["websites"];
    foreach ($websites as $website) {
        echo "<br/> You selected " . $website;
    }    
}

//it commons with radio
if (isset($_POST["radio_websites"])) {
    $radio_websites = $_POST["websites"];
    foreach ($radio_websites as $radio_website) {
        echo "<br/> You selected " . $radio_website;
    }    
}

//we can also use select options

if (isset($_POST["selection"])) {
    $selection = $_POST["selection"];
    foreach ($selection as $select) {
        echo "You selected " . $select;
    }
}