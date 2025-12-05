<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: signin.php");
    exit;
}

require __DIR__ . "/../config/connection.php";

$user_id = (int) $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT name, email, phone FROM accounts WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    if ($name !== '') {
        $upd = $conn->prepare("UPDATE accounts SET name = ?, phone = ? WHERE id = ?");
        $upd->bind_param("ssi", $name, $phone, $user_id);
        $upd->execute();
        $_SESSION['name'] = $name;
        header("Location: admin-profile.php?updated=1");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Admin Profile | MediInternia Internship Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body class="bg-light d-flex flex-column min-vh-100" data-page="admin-profile">

<?php include __DIR__ . "/../app/components/nav.php"; ?>

<main class="flex-grow-1 py-5">
  <div class="container">
    <h1 class="h3 fw-bold mb-3">Admin profile</h1>
    <p class="text-muted mb-4">Manage your administrator details and contact information.</p>

    <?php if (isset($_GET['updated'])): ?>
      <div class="alert alert-success">Profile updated successfully.</div>
    <?php endif; ?>

    <?php if (isset($_GET['password_updated'])): ?>
      <div class="alert alert-success">Password changed successfully.</div>
    <?php endif; ?>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="avatar-initials bg-primary text-white me-3">
                <?php
                  $parts = explode(' ', $admin['name']);
                  $initials = strtoupper(substr($parts[0] ?? 'A', 0, 1) . substr($parts[1] ?? 'P', 0, 1));
                  echo htmlspecialchars($initials);
                ?>
              </div>
              <div>
                <h2 class="h5 fw-bold mb-1"><?php echo htmlspecialchars($admin['name']); ?></h2>
                <p class="text-muted mb-0">Platform administrator</p>
              </div>
            </div>

            <form method="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label" for="name">Full name</label>
                <input class="form-control" type="text" id="name" name="name"
                       value="<?php echo htmlspecialchars($admin['name']); ?>" required>
                <div class="invalid-feedback">Please enter your full name.</div>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" type="email" value="<?php echo htmlspecialchars($admin['email']); ?>" disabled>
              </div>
              <div class="mb-3">
                <label class="form-label" for="phone">Phone</label>
                <input class="form-control" type="text" id="phone" name="phone"
                       value="<?php echo htmlspecialchars($admin['phone'] ?? ''); ?>">
              </div>
              <button class="btn btn-primary w-100" type="submit">Save changes</button>
            </form>

            <a href="change-password.php" class="btn btn-outline-secondary w-100 mt-3">
              <i class="bi bi-shield-lock me-1"></i> Change password
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <h2 class="h6 fw-semibold mb-2">Admin overview</h2>
            <p class="text-muted small mb-3">
              From this profile and the analytics dashboard, the admin can monitor registered applicants,
              employers, and internship submissions, and export data for reporting.
            </p>
            <ul class="small text-muted mb-0">
              <li>Access to system-wide analytics and reporting.</li>
              <li>Ability to review trends in submissions and categories.</li>
              <li>Extra tools: export CSV of key metrics, view top employers by activity.</li>
            </ul>
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
