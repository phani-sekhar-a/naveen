<?php
// partials/nav.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current = basename($_SERVER['PHP_SELF']);

function is_active($files) {
    global $current;
    if (!is_array($files)) {
        $files = [$files];
    }
    return in_array($current, $files, true) ? ' active' : '';
}
?>
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container py-2">
        <a class="navbar-brand fw-bold text-primary" href="index.php">
            <i class="bi bi-heart-pulse me-2"></i>MediInternia Internship Portal
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <!-- Public / common links -->
                <li class="nav-item">
                    <a class="nav-link<?= is_active(['internships.html', 'internships.php']) ?>"
                       href="internships.php">Internships</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?= is_active(['application.html', 'application.php']) ?>"
                       href="application.php">Apply</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?= is_active(['schedule.html', 'schedule.php']) ?>"
                       href="schedule.php">Schedule</a>
                </li>

                <!-- Admin-only analytics link -->
                <?php if (!empty($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link<?= is_active('admin-dashboard.php') ?>"
                           href="admin-dashboard.php">Analytics</a>
                    </li>
                <?php endif; ?>

                

                <!-- Right-side: user dropdown or Sign In -->
                <?php if (!empty($_SESSION['user_id'])): ?>
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle fw-semibold"
                           href="#"
                           id="userDropdown"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Hi, <?= htmlspecialchars($_SESSION['name'] ?? 'User') ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                            <?php if ($_SESSION['role'] === 'student'): ?>
                                <li><a class="dropdown-item" href="student-profile.php">Student Profile</a></li>
                            <?php elseif ($_SESSION['role'] === 'employer'): ?>
                                <li><a class="dropdown-item" href="employer-profile.php">Employer Profile</a></li>
                            <?php elseif ($_SESSION['role'] === 'admin'): ?>
                                <li><a class="dropdown-item" href="admin-profile.php">Admin Profile</a></li>
                                <li><a class="dropdown-item" href="admin-dashboard.php">Analytics dashboard</a></li>
                                <li><a class="dropdown-item" href="manage_users.php">Manage users</a></li>
                                <li><a class="dropdown-item" href="manage_listings.php">Manage listings</a></li>
                            <?php endif; ?>

                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger fw-semibold" href="auth/logout.php">
                                    <i class="bi bi-box-arrow-right me-1"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="login.php">Sign In</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
