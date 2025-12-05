<?php
$host = "ls-a00f428950c78116256c0da1455a03642347f843.cbmqeamcwfsj.eu-west-3.rds.amazonaws.com";
$user = "dbmasteruser";
$pass = "(bc]MN7}7b+HIbG;!)G3dkmfzGTJeOV$";
$db   = "carebridge_hub";

$conn = new mysqli($host, $user, $pass, $db, 3306);

if ($conn->connect_error) {
    die("❌ Database Connection Failed: " . $conn->connect_error);
}

// Uncomment this for debugging only
 // echo "Database connected successfully";
?>