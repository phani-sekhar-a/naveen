<?php
require __DIR__ . "/middleware/auth.php";

if (!isset($_SESSION['userId']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}

$success = isset($_GET['success']);
$error = isset($_GET['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Apply | MediInternia</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<?php include __DIR__ . "/partials/nav.php"; ?>

<div class="container py-5">

<div class="col-lg-7 mx-auto">

<div class="card shadow-sm border-0">
<div class="card-header bg-white">
<h4 class="fw-bold mb-0">Internship Application</h4>
</div>
<div class="card-body">

    <?php if ($success): ?>
        <div class="alert alert-success">Application submitted successfully.</div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="alert alert-danger">Something went wrong. Please try again.</div>
    <?php endif; ?>

    <form method="POST" action="auth/submit_application.php" enctype="multipart/form-data">

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Select Internship</label>
            <select name="internship" class="form-select" required>
                <option value="" disabled selected>Select</option>

                <!-- FIXED VALUES -->
                <option value="Pediatric Nursing Rotation|Green Valley Hospital">
                    Pediatric Nursing Rotation — Green Valley Hospital
                </option>

                <option value="Community Health Outreach Fellow|Hopewell Clinics Network">
                    Community Health Outreach Fellow — Hopewell Clinics Network
                </option>

                <option value="Radiology Imaging Support|Mercy Diagnostics Lab">
                    Radiology Imaging Support — Mercy Diagnostics Lab
                </option>

                <option value="Clinical Informatics Analyst|Northwest Health Partners">
                    Clinical Informatics Analyst — Northwest Health Partners
                </option>

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Resume (PDF / DOC / DOCX)</label>
            <input type="file" name="resume" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cover Letter</label>
            <textarea name="cover_letter" rows="6" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>

    </form>

</div>
</div>

</div>

</div>

<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center small">
        &copy; <?php echo date('Y'); ?> MediInternia. All rights reserved.
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
