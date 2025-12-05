<?php
$host = "ls-ce3473b2e9df912dc1a7808b56780f7e24480c96.cbmqeamcwfsj.eu-west-3.rds.amazonaws.com";
$user = "dbmasteruser";
$pass = "hpJl^;2-nw4C&8WB{?dM!`.lp<u]V}EZ";
$db   = "pranay"; 

$conn = new mysqli($host, $user, $pass, $db, 3306);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}


?>