<?php
require __DIR__ . '/../../config/connection.php';

$data = $conn->query("SELECT category, COUNT(*) AS total FROM placements GROUP BY category");

$result = [];
while($row = $data->fetch_assoc()) {
    $result[] = $row;
}
echo json_encode($result);
?>
