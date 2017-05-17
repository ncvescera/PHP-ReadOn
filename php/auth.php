<?php

require 'connect.php';

$user = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT userid,pass FROM users WHERE userid=\"$user\" AND pass=\"$password\"";

foreach($connection->query($query) as $result){
    echo "GOOD!";
    exit();
}

echo "BAAD!";


