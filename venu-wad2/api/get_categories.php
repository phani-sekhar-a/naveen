<?php
require '../db_connect.php';

$data = $conn->query("SELECT category, COUNT(*) AS total FROM internships GROUP BY category");

$result = [];
while($row = $data->fetch_assoc()) {
    $result[] = $row;
}
echo json_encode($result);
?>
