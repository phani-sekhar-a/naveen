<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create Account | MediInternia Internship Portal</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body class="bg-light d-flex flex-column min-vh-100">

<?php include "partials/nav.php"; ?>

<main class="flex-grow-1 d-flex align-items-center py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
          <div class="card-body p-4 p-md-5">

            <h1 class="h3 fw-bold mb-1">Create Account</h1>
            <p class="text-muted mb-4">Join MediInternia today.</p>

            <?php if(isset($_SESSION['error'])){ ?>
              <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php } ?>

            <form method="POST" action="auth/signup.php" class="needs-validation" novalidate>

              <div class="mb-3">
                <label class="form-label fw-semibold">Full Name</label>
                <input class="form-control form-control-lg" name="name" required>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input class="form-control form-control-lg" type="email" name="email" required>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input class="form-control form-control-lg" type="password" name="password" required>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Register as</label>
                <select class="form-select form-select-lg" name="role" required>
                  <option value="student">Student</option>
                  <option value="employer">Employer</option>
                  <option value="admin">Admin</option>
                </select>
              </div>

              <button class="btn btn-primary w-100 btn-lg mb-3" type="submit">Create Account</button>

            </form>

            <p class="text-center mb-0">Already registered?
              <a href="login.php" class="fw-semibold">Sign In</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="bg-dark text-white py-4">
  <div class="container text-center small">
    &copy; <span id="currentYear"></span> MediInternia Internship Portal. All rights reserved.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
