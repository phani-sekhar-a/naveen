<?php
require __DIR__ . '/../../config/connection.php';

$sql = "SELECT accounts.name AS employer, COUNT(submissions.id) AS apps
        FROM accounts
        LEFT JOIN placements ON placements.employer_id = accounts.id
        LEFT JOIN submissions ON submissions.placement_id = placements.id
        WHERE accounts.role='employer'
        GROUP BY accounts.id";

$res = $conn->query($sql);
$output = [];
while($row = $res->fetch_assoc()) {
    $output[] = $row;
}
echo json_encode($output);
?>
