<?php
require '../db_connect.php';

$sql = "SELECT users.name AS employer, COUNT(applications.id) AS apps
        FROM users
        LEFT JOIN internships ON internships.employer_id = users.id
        LEFT JOIN applications ON applications.internship_id = internships.id
        WHERE users.role='employer'
        GROUP BY users.id";

$res = $conn->query($sql);
$output = [];
while($row = $res->fetch_assoc()) {
    $output[] = $row;
}
echo json_encode($output);
?>
