<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

require __DIR__ . "/config/db.php";

// Helper: safe count
function fetchCount(mysqli $conn, string $sql): int {
    $res = $conn->query($sql);
    if (!$res) {
        error_log("SQL error in fetchCount: " . $conn->error);
        return 0;
    }
    $row = $res->fetch_assoc();
    return (int)($row['c'] ?? 0);
}

// KPI cards
$studentsCount     = fetchCount($conn, "SELECT COUNT(*) AS c FROM users WHERE role = 'student'");
$employersCount    = fetchCount($conn, "SELECT COUNT(*) AS c FROM users WHERE role = 'employer'");
$applicationsCount = fetchCount($conn, "SELECT COUNT(*) AS c FROM applications");

// Internship categories (for chart)
$catLabels = [];
$catValues = [];
$catSql = "SELECT category, COUNT(*) AS c FROM internships GROUP BY category";
$catRes = $conn->query($catSql);
if (!$catRes) {
    error_log("Category SQL error: " . $conn->error);
} else {
    while ($row = $catRes->fetch_assoc()) {
        $catLabels[] = $row['category'];
        $catValues[] = (int)$row['c'];
    }
}

// Applications per employer (for chart)
$empLabels = [];
$empValues = [];
$empSql = "
    SELECT u.name AS employer, COUNT(a.id) AS apps
    FROM users u
    JOIN internships i ON i.employer_id = u.id
    LEFT JOIN applications a ON a.internship_id = i.id
    WHERE u.role = 'employer'
    GROUP BY u.id, u.name
    ORDER BY apps DESC
";
$empRes = $conn->query($empSql);
if (!$empRes) {
    error_log("Employer SQL error: " . $conn->error);
} else {
    while ($row = $empRes->fetch_assoc()) {
        $empLabels[] = $row['employer'];
        $empValues[] = (int)$row['apps'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Analytics Dashboard | MediInternia Internship Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body class="bg-light d-flex flex-column min-vh-100" data-page="analytics">

<?php include __DIR__ . "/partials/nav.php"; ?>

<main class="py-5 flex-grow-1">
  <div class="container">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
      <div>
        <h1 class="h3 fw-bold mb-1">Platform analytics</h1>
        <p class="text-muted mb-0">Real-time summary of applicants, employers, and internship activity.</p>
      </div>
      <div class="d-flex gap-2">
        <!-- Extra admin functions are linked below as separate pages -->
      </div>
    </div>

    <!-- KPI row -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body text-center">
            <span class="text-muted small text-uppercase d-block">Registered applicants (students)</span>
            <h2 class="h3 fw-bold mt-1 mb-0"><?php echo $studentsCount; ?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body text-center">
            <span class="text-muted small text-uppercase d-block">Registered employers</span>
            <h2 class="h3 fw-bold mt-1 mb-0"><?php echo $employersCount; ?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body text-center">
            <span class="text-muted small text-uppercase d-block">Total applications</span>
            <h2 class="h3 fw-bold mt-1 mb-0"><?php echo $applicationsCount; ?></h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Charts -->
    <div class="row g-4 mb-4">
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
          <div class="card-header bg-white">
            <h2 class="h6 fw-semibold mb-0">Internship categories</h2>
            <p class="text-muted small mb-0">Most popular areas based on number of listings.</p>
          </div>
          <div class="card-body">
            <canvas id="categoriesChart" height="220"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
          <div class="card-header bg-white">
            <h2 class="h6 fw-semibold mb-0">Applications per employer</h2>
            <p class="text-muted small mb-0">How many applications each employer currently has.</p>
          </div>
          <div class="card-body">
            <canvas id="applicationsChart" height="220"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Extra admin functions (required 2 extra features) -->
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
          <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <div>
              <h2 class="h6 fw-semibold mb-0">Manage users</h2>
              <p class="text-muted small mb-0">Extra admin function: disable accounts or change user roles.</p>
            </div>
          </div>
          <div class="card-body">
            <a href="manage_users.php" class="btn btn-outline-primary w-100">
              <i class="bi bi-people-fill me-1"></i>Open user management
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
          <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <div>
              <h2 class="h6 fw-semibold mb-0">Manage internship listings</h2>
              <p class="text-muted small mb-0">Extra admin function: archive or deactivate internship posts.</p>
            </div>
          </div>
          <div class="card-body">
            <a href="manage_listings.php" class="btn btn-outline-secondary w-100">
              <i class="bi bi-briefcase me-1"></i>Open listings management
            </a>
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
  // footer year
  document.getElementById('currentYear').textContent = new Date().getFullYear();

  const categoryLabels = <?php echo json_encode($catLabels); ?>;
  const categoryValues = <?php echo json_encode($catValues); ?>;

  const employerLabels = <?php echo json_encode($empLabels); ?>;
  const employerValues = <?php echo json_encode($empValues); ?>;

  if (document.getElementById('categoriesChart')) {
    new Chart(document.getElementById('categoriesChart'), {
      type: 'pie',
      data: {
        labels: categoryLabels,
        datasets: [{
          data: categoryValues,
          backgroundColor: ['#0d6efd', '#6610f2', '#20c997', '#ffc107', '#dc3545']
        }]
      },
      options: {
        plugins: { legend: { position: 'bottom' } }
      }
    });
  }

  if (document.getElementById('applicationsChart')) {
    new Chart(document.getElementById('applicationsChart'), {
      type: 'bar',
      data: {
        labels: employerLabels,
        datasets: [{
          data: employerValues,
          backgroundColor: '#0d6efd'
        }]
      },
      options: {
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  }
</script>
</body>
</html>
