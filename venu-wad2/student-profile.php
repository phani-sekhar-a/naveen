<?php
require "middleware/auth.php";
require "config/db.php";

$id = $_SESSION['user_id'];

$sql = "SELECT name,email,phone,location,program,program_level,about,focus,availability FROM users WHERE id=?";
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
<title>Student Profile | MediInternia Internship Portal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="bg-light min-vh-100 d-flex flex-column">
<?php include "partials/nav.php"; ?>

<main class="flex-grow-1 container py-5">

<h2 class="fw-bold mb-1">Welcome, <?php echo $_SESSION['name']; ?> 👋</h2>
<p class="text-muted mb-4">Here is your profile information.</p>

<?php if(isset($_SESSION['success'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
<?php } ?>

<div class="row g-4">
  <div class="col-lg-4">

    <div class="card shadow-sm border-0 mb-3 text-center p-3">
      <div class="profile-avatar mx-auto mb-3">
        <?= strtoupper(substr($user['name'],0,2)); ?>
      </div>
      <h4 class="fw-bold"><?= $user['name']; ?></h4>
      <p class="text-muted"><?= ucfirst($_SESSION['role']); ?></p>

      <p class="small"><i class="bi bi-mortarboard text-primary me-2"></i><?= $user['program'] ?: "-"; ?></p>
      <p class="small"><i class="bi bi-geo-alt text-primary me-2"></i><?= $user['location'] ?: "-"; ?></p>

      <button class="btn btn-outline-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
      <button class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#editPasswordModal">Change Password</button>
    </div>

    <div class="card shadow-sm border-0 p-3">
      <h6 class="fw-bold mb-3">Contact Information</h6>
      <p><i class="bi bi-envelope-open text-primary me-2"></i><?= $user['email']; ?></p>
      <p><i class="bi bi-telephone text-primary me-2"></i><?= $user['phone'] ?: "-"; ?></p>
    </div>

  </div>

  <div class="col-lg-8">

    <div class="card shadow-sm border-0 p-4">
      <h5 class="fw-bold mb-3">Student Overview</h5>

      <p class="mb-3"><strong>About You:</strong><br><?= $user['about'] ?: "Not provided"; ?></p>
      <p class="mb-2"><strong>Programme Level:</strong><br><?= $user['program_level'] ?: "-"; ?></p>
      <p class="mb-2"><strong>Primary Focus:</strong><br><?= $user['focus'] ?: "-"; ?></p>
      <p><strong>Availability:</strong><br><?= $user['availability'] ?: "-"; ?></p>
    </div>

  </div>
</div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-auto">
© <?= date("Y"); ?> MediInternia Internship Portal
</footer>


<!-- Modal: Edit Profile -->
<div class="modal fade" id="editProfileModal" tabindex="-1">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
<h5 class="modal-title">Edit Profile</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<form method="POST" action="auth/profile-update.php">
<div class="modal-body">

<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Full Name</label>
    <input class="form-control" name="name" value="<?= $user['name']; ?>" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input class="form-control" type="email" name="email" value="<?= $user['email']; ?>" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Phone</label>
    <input class="form-control" name="phone" value="<?= $user['phone']; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Location</label>
    <input class="form-control" name="location" value="<?= $user['location']; ?>">
  </div>

  <div class="col-md-6">
    <label class="form-label">Programme</label>
    <input class="form-control" name="program" value="<?= $user['program']; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Programme Level</label>
    <input class="form-control" name="program_level" value="<?= $user['program_level']; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">About You</label>
    <textarea class="form-control" name="about" rows="3"><?= $user['about']; ?></textarea>
  </div>

  <div class="col-md-6">
    <label class="form-label">Primary Focus</label>
    <input class="form-control" name="focus" value="<?= $user['focus']; ?>">
  </div>

  <div class="col-md-6">
    <label class="form-label">Availability</label>
    <input class="form-control" name="availability" value="<?= $user['availability']; ?>">
  </div>
</div>

</div>

<div class="modal-footer">
<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
<button class="btn btn-primary">Save Changes</button>
</div>

</form>
</div>
</div>
</div>


<!-- Modal: Change Password -->
<div class="modal fade" id="editPasswordModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-secondary text-white">
<h5 class="modal-title">Change Password</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<form method="POST" action="auth/password-update.php">
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
<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
<button class="btn btn-secondary">Update Password</button>
</div>
</form>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
