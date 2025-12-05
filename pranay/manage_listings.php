<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

require __DIR__ . "/config/db.php";

// Delete internship
if(isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $conn->query("DELETE FROM internships WHERE id=$id");
    header("Location: manage_listings.php?deleted=1");
    exit;
}

$sql = "SELECT i.id, i.title, i.category, u.name AS employer 
        FROM internships i 
        JOIN users u ON i.employer_id = u.id";
$listings = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Manage Listings | MediInternia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include __DIR__ . "/partials/nav.php"; ?>

<main class="container py-5">
    <h2 class="fw-bold mb-4">Manage Internship Listings</h2>

    <?php if(isset($_GET['deleted'])): ?>
        <div class="alert alert-success">Internship deleted successfully.</div>
    <?php endif; ?>

    <table class="table table-bordered bg-white shadow-sm align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th><th>Title</th><th>Category</th><th>Employer</th><th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $listings->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['category']) ?></td>
            <td><?= htmlspecialchars($row['employer']) ?></td>
            <td class="text-center">
                <a class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure you want to delete this listing?');"
                   href="manage_listings.php?delete=<?= $row['id'] ?>">
                   <i class="bi bi-trash"></i> Delete
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <a href="admin-dashboard.php" class="btn btn-secondary mt-3">Back</a>
</main>
<footer class="bg-dark text-white py-4 mt-auto text-center small">
    &copy; <script>document.write(new Date().getFullYear());</script> MediInternia Internship Portal
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
