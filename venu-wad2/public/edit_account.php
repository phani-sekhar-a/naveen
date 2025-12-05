<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: signin.php"); exit;
}
require __DIR__ . "/../config/connection.php";

$id = (int)($_GET['id'] ?? 0);

// Fetch user
$u = $conn->query("SELECT * FROM accounts WHERE id=$id")->fetch_assoc();
if (!$u) { die("User not found."); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    $stmt = $conn->prepare("UPDATE accounts SET name=?, phone=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $phone, $id);
    $stmt->execute();

    header("Location: account_admin.php?updated=1");
    exit;
}
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Edit User</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include __DIR__ . "/../app/components/nav.php"; ?>

<div class="container py-5">
<h3 class="mb-3">Edit User</h3>
<form method="post">
  <label class="form-label">Name</label>
  <input class="form-control mb-3" name="name" required value="<?= htmlspecialchars($u['name']) ?>">

  <label class="form-label">Phone</label>
  <input class="form-control mb-3" name="phone" value="<?= htmlspecialchars($u['phone'] ?? '') ?>">

  <button class="btn btn-primary">Save Changes</button>
  <a href="account_admin.php" class="btn btn-secondary">Cancel</a>
</form>
</div>
<footer class="bg-dark text-white py-4 mt-auto text-center small">
    &copy; <script>document.write(new Date().getFullYear());</script> MediInternia Internship Portal
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body></html>
