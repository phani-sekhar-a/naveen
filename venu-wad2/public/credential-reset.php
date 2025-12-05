<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit;
}

require __DIR__ . "/../config/connection.php";

$user_id = (int) $_SESSION['user_id'];
$error = '';
$success = '';

// Fetch current password hash
$stmt = $conn->prepare("SELECT password FROM accounts WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    // User not found – force logout
    session_destroy();
    header("Location: signin.php");
    exit;
}

$currentHash = $user['password'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current = $_POST['current_password'] ?? '';
    $new     = $_POST['new_password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    if ($current === '' || $new === '' || $confirm === '') {
        $error = "Please fill in all fields.";
    } elseif (!password_verify($current, $currentHash)) {
        $error = "Your current password is incorrect.";
    } elseif ($new !== $confirm) {
        $error = "New password and confirmation do not match.";
    } elseif (strlen($new) < 8) {
        $error = "New password must be at least 8 characters long.";
    } else {
        $newHash = password_hash($new, PASSWORD_DEFAULT);
        $upd = $conn->prepare("UPDATE accounts SET password = ? WHERE id = ?");
        $upd->bind_param("si", $newHash, $user_id);
        if ($upd->execute()) {
            // Redirect back to profile with success flag
            header("Location: admin-profile.php?password_updated=1");
            exit;
        } else {
            $error = "Could not update password. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Change Password | MediInternia Internship Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<?php include __DIR__ . "/../app/components/nav.php"; ?>

<main class="flex-grow-1 py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <h1 class="h4 fw-bold mb-3">Change password</h1>
            <p class="text-muted small mb-4">Update the password for your MediInternia account.</p>

            <?php if ($error): ?>
              <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form method="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label" for="current_password">Current password</label>
                <input class="form-control" type="password" id="current_password" name="current_password" required>
                <div class="invalid-feedback">Enter your current password.</div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="new_password">New password</label>
                <input class="form-control" type="password" id="new_password" name="new_password" minlength="8" required>
                <div class="invalid-feedback">New password must be at least 8 characters.</div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="confirm_password">Confirm new password</label>
                <input class="form-control" type="password" id="confirm_password" name="confirm_password" minlength="8" required>
                <div class="invalid-feedback">Please confirm your new password.</div>
              </div>

              <button class="btn btn-primary w-100" type="submit">
                <i class="bi bi-shield-lock me-1"></i> Save new password
              </button>
              <a href="admin-profile.php" class="btn btn-outline-secondary w-100 mt-2">Back to profile</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="bg-dark text-white py-4 mt-auto">
  <div class="container text-center small">
    &copy; <span id="currentYear"></span> MediInternia Internship Portal. All rights reserved.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('currentYear').textContent = new Date().getFullYear();
  document.querySelectorAll('.needs-validation').forEach(function(form){
    form.addEventListener('submit',function(e){
      if(!form.checkValidity()){e.preventDefault();e.stopPropagation();}
      form.classList.add('was-validated');
    });
  });
</script>
</body>
</html>
