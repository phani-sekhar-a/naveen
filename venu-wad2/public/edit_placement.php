<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: signin.php"); exit;
}
require __DIR__ . "/../config/connection.php";

$id = (int)($_GET['id'] ?? 0);

$l = $conn->query("SELECT * FROM placements WHERE id=$id")->fetch_assoc();
if (!$l) { die("Listing not found."); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title    = trim($_POST['title']);
    $category = trim($_POST['category']);
    $location = trim($_POST['location']);

    $stmt = $conn->prepare("UPDATE placements SET title=?, category=?, location=? WHERE id=?");
    $stmt->bind_param("sssi", $title, $category, $location, $id);
    $stmt->execute();

    header("Location: placement_admin.php?updated=1");
    exit;
}
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Edit Internship Listing</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include __DIR__ . "/../app/components/nav.php"; ?>

<div class="container py-5">
<h3 class="mb-3">Edit Internship Listing</h3>

<form method="post">
  <label class="form-label">Title</label>
  <input class="form-control mb-3" name="title" required value="<?= htmlspecialchars($l['title']) ?>">

  <label class="form-label">Category</label>
  <input class="form-control mb-3" name="category" required value="<?= htmlspecialchars($l['category']) ?>">

  <label class="form-label">Location</label>
  <input class="form-control mb-3" name="location" required value="<?= htmlspecialchars($l['location']) ?>">

  <button class="btn btn-primary">Save</button>
  <a href="placement_admin.php" class="btn btn-secondary">Cancel</a>
</form>
</div>

</body></html>
