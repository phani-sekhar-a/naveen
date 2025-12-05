<?php
require "../app/middleware/require_auth.php";
require "../config/connection.php";

if($_SESSION['role'] !== "employer") {
    header("Location: home.php");
    exit;
}

$id = $_SESSION['user_id'];

$sql = "SELECT name,email,company_name,company_location,company_phone,company_focus,company_about FROM accounts WHERE id=?";
$stmt = $conn->prepare($sql);
if(!$stmt){ die("DB Error: ".$conn->error); }
$stmt->bind_param("i", $id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Employer Profile | MediInternia Internship Portal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="bg-light min-vh-100 d-flex flex-column">

<?php include "../app/components/nav.php"; ?>

<main class="flex-grow-1 container py-5">

<h2 class="fw-bold mb-1">Welcome, <?= $_SESSION['name']; ?> 👋</h2>
<p class="text-muted mb-4">Manage your organization details here.</p>

<?php if(isset($_SESSION['success'])) { ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
<?php } ?>

<div class="row g-4">

<div class="col-lg-4">
  <div class="card border-0 shadow-sm text-center p-4">
    <div class="profile-avatar mx-auto mb-3">
      <?= strtoupper(substr($user['company_name'] ?: $user['name'], 0, 2)); ?>
    </div>

    <h4 class="fw-bold"><?= $user['company_name'] ?: "Unnamed Organization"; ?></h4>
    <p class="text-muted">Employer</p>

    <button class="btn btn-outline-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#editCompanyModal">Edit Company Info</button>
    <button class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#editPasswordModal">Change Password</button>
  </div>
</div>

<div class="col-lg-8">

  <div class="card border-0 shadow-sm p-4">
    <h5 class="fw-bold mb-3">Company Information</h5>

    <p><strong>Email:</strong><br><?= $user['email']; ?></p>
    <p><strong>Phone:</strong><br><?= $user['company_phone'] ?: "-"; ?></p>
    <p><strong>Location:</strong><br><?= $user['company_location'] ?: "-"; ?></p>
    <p><strong>Primary Focus:</strong><br><?= $user['company_focus'] ?: "-"; ?></p>
    <p><strong>About the Organization:</strong><br><?= $user['company_about'] ?: "Not provided"; ?></p>
  </div>

</div>

</div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-auto">
© <?= date("Y"); ?> MediInternia Internship Portal
</footer>

<!-- Modal: Edit Organization Info -->
<div class="modal fade" id="editCompanyModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
<h5 class="modal-title">Edit Company Info</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<form method="POST" action="actions/employer-profile-update.php">
<div class="modal-body">

<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Company Name</label>
    <input class="form-control" name="company_name" value="<?= $user['company_name']; ?>" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Company Email</label>
    <input class="form-control" type="email" name="email" value="<?= $user['email']; ?>" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Phone</label>
    <input class="form-control" name="company_phone" value="<?= $user['company_phone']; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Location</label>
    <input class="form-control" name="company_location" value="<?= $user['company_location']; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Primary Focus</label>
    <input class="form-control" name="company_focus" value="<?= $user['company_focus']; ?>">
  </div>
  <div class="col-12">
    <label class="form-label">About Company</label>
    <textarea class="form-control" name="company_about" rows="3"><?= $user['company_about']; ?></textarea>
  </div>
</div>

</div>
<div class="modal-footer">
<button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
<button class="btn btn-primary">Save Changes</button>
</div>
</form>

</div>
</div>
</div>

<!-- Modal: Change Password -->
<div class="modal fade" id="editPasswordModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-secondary text-white">
<h5 class="modal-title">Change Password</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<form method="POST" action="actions/password-update.php">
<div class="modal-body">
<div class="mb-3">
<label class="form-label">Current Password</label>
<input type="password" name="current" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">New Password</label>
<input type="password" name="new" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Confirm Password</label>
<input type="password" name="confirm" class="form-control" required>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
<button class="btn btn-secondary">Update Password</button>
</div>
</form>

</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
