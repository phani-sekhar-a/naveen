<?php
require '../db_connect.php';

$count = [];

$count['students'] = $conn->query("SELECT COUNT(*) as c FROM users WHERE role='student'")->fetch_assoc()['c'];
$count['employers'] = $conn->query("SELECT COUNT(*) as c FROM users WHERE role='employer'")->fetch_assoc()['c'];
$count['applications'] = $conn->query("SELECT COUNT(*) as c FROM applications")->fetch_assoc()['c'];

echo json_encode($count);
?>
