<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign In | MediInternia Internship Portal</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body data-page="login" class="bg-light d-flex flex-column min-vh-100">

<?php include "../app/components/nav.php"; ?>

<main class="flex-grow-1 d-flex align-items-center py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
          <div class="card-body p-4 p-md-5">
            
            <h1 class="h3 fw-bold mb-1">Welcome back</h1>
            <p class="text-muted mb-4">Sign in to continue to your MediInternia Portal dashboard.</p>

            <?php if(isset($_SESSION['error'])){ ?>
              <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])){ ?>
              <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php } ?>

            <form class="needs-validation" method="POST" action="actions/login.php" novalidate>

              <div class="mb-3">
                <label class="form-label fw-semibold">Email address</label>
                <input class="form-control form-control-lg" type="email" name="email" placeholder="person@email.com" required>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group input-group-lg">
                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                  <button class="btn btn-outline-secondary" type="button" onclick="this.previousElementSibling.type=this.previousElementSibling.type==='password'?'text':'password';">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Sign in as</label>
                <div class="btn-group w-100" role="group">
                  <input type="radio" class="btn-check" name="role" id="loginRoleStudent" value="student" checked>
                  <label class="btn btn-outline-primary" for="loginRoleStudent">
                    <i class="bi bi-person-badge me-2"></i>Student
                  </label>
                  <input type="radio" class="btn-check" name="role" id="loginRoleEmployer" value="employer">
                  <label class="btn btn-outline-primary" for="loginRoleEmployer">
                    <i class="bi bi-building me-2"></i>Employer
                  </label>
                  <input type="radio" class="btn-check" name="role" id="loginRoleAdmin" value="admin">
                  <label class="btn btn-outline-primary" for="loginRoleAdmin">
                    <i class="bi bi-shield-lock me-2"></i>Admin
                  </label>
                </div>
              </div>

              <button class="btn btn-primary w-100 btn-lg mb-3" type="submit">Sign In</button>
            </form>

            <p class="text-center mb-0">
              Don't have an account?
              <a href="signup.php" class="fw-semibold">Create one now</a>
            </p>

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
