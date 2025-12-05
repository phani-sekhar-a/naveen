<?php
require __DIR__ . '/../../config/connection.php';

$count = [];

$count['students'] = $conn->query("SELECT COUNT(*) as c FROM accounts WHERE role='student'")->fetch_assoc()['c'];
$count['employers'] = $conn->query("SELECT COUNT(*) as c FROM accounts WHERE role='employer'")->fetch_assoc()['c'];
$count['submissions'] = $conn->query("SELECT COUNT(*) as c FROM submissions")->fetch_assoc()['c'];

echo json_encode($count);
?>
