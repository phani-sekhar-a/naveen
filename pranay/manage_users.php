<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php"); exit;
}
require __DIR__ . "/config/db.php";

// Delete user if requested
if (isset($_GET['delete'])) {
    $del = (int)$_GET['delete'];
    $conn->query("DELETE FROM users WHERE id = $del AND role != 'admin'");
    header("Location: manage_users.php?deleted=1");
    exit;
}

// Fetch all users except admin himself
$sql = "SELECT id, name, email, role, phone FROM users WHERE role != 'admin' ORDER BY id DESC";
$users = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Manage Users | Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<?php include __DIR__ . "/partials/nav.php"; ?>

<main class="container py-5 flex-grow-1">
    <h2 class="h4 fw-bold mb-3">Manage Users</h2>
    <p class="text-muted mb-4">Remove inappropriate accounts or update user details.</p>

    <?php if (isset($_GET['deleted'])): ?>
        <div class="alert alert-success">User removed successfully.</div>
    <?php endif; ?>

    <div class="table-responsive card shadow-sm rounded-4">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Name</th><th>Email</th><th>Role</th><th>Phone</th><th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($u = $users->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($u['name']) ?></td>
                    <td><?= htmlspecialchars($u['email']) ?></td>
                    <td><?= htmlspecialchars($u['role']) ?></td>
                    <td><?= htmlspecialchars($u['phone'] ?? 'N/A') ?></td>
                    <td class="text-end">
                        <a href="edit_user.php?id=<?= $u['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="manage_users.php?delete=<?= $u['id'] ?>"
                            onclick="return confirm('Delete this user?')"
                            class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>

<footer class="bg-dark text-white py-4 mt-auto text-center small">
    &copy; <script>document.write(new Date().getFullYear());</script> MediInternia Internship Portal
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
