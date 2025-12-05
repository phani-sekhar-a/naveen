<?php
require __DIR__ . "/middleware/auth.php";
require __DIR__ . "/config/db.php";

if (!isset($_SESSION['userId']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}

$studentId = $_SESSION['userId'];

$stmt = $conn->prepare("SELECT * FROM applications WHERE student_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $studentId);
$stmt->execute();
$res = $stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
<title>My Applications</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "partials/nav.php"; ?>

<div class="container py-5">
<h3 class="mb-4">My Applications</h3>

<table class="table table-bordered table-hover">
<thead class="table-light">
<tr>
    <th>Internship</th>
    <th>Facility</th>
    <th>Status</th>
    <th>Submitted</th>
    <th>Updated</th>
    <th>Resume</th>
</tr>
</thead>
<tbody>

<?php while ($row = $res->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($row['internship_title']) ?></td>
<td><?= htmlspecialchars($row['internship_facility']) ?></td>
<td><span class="badge bg-primary"><?= $row['status'] ?></span></td>
<td><?= $row['created_at'] ?></td>
<td><?= $row['updated_at'] ?></td>
<td><a href="<?= $row['resume_path'] ?>" target="_blank" class="btn btn-sm btn-outline-primary">View</a></td>
</tr>
<?php endwhile; ?>

</tbody>
</table>

</div>
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center small">
        &copy; <?php echo date('Y'); ?> MediInternia. All rights reserved.
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
