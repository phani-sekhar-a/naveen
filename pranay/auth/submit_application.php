<?php
require __DIR__ . '/../middleware/auth.php';
require __DIR__ . '/../config/db.php';

// Must be logged in as student
if (!isset($_SESSION['userId']) || $_SESSION['role'] !== 'student') {
    header("Location: ../login.php");
    exit();
}

$studentId = $_SESSION['userId'];

// Ensure DB connection exists
if (!isset($conn) || !$conn instanceof mysqli) {
    die(" Database connection (\$conn) not found. Check config/db.php.");
}

// Validate required fields
if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['internship']) ||
    empty($_POST['cover_letter']) ||
    !isset($_FILES['resume'])
) {
    header("Location: ../application.php?error=1");
    exit();
}

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$coverLetter = trim($_POST['cover_letter']);

// Internship field MUST look like:  title|facility
if (!str_contains($_POST['internship'], "|")) {
    header("Location: ../application.php?error=1");
    exit();
}

list($internshipTitle, $internshipFacility) = explode("|", $_POST['internship'], 2);

// Validate resume
$file = $_FILES['resume'];
$allowedExt = ['pdf', 'doc', 'docx'];
$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

if (!in_array($ext, $allowedExt)) {
    header("Location: ../application.php?error=1");
    exit();
}

if ($file['size'] > 5 * 1024 * 1024) {
    header("Location: ../application.php?error=1");
    exit();
}

// Create folder if missing
$uploadDir = __DIR__ . '/../uploads/resumes/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$newFileName = "resume_{$studentId}_" . time() . "." . $ext;
$destination = $uploadDir . $newFileName;

// Upload file
if (!move_uploaded_file($file['tmp_name'], $destination)) {
    header("Location: ../application.php?error=1");
    exit();
}

$resumePath = "uploads/resumes/" . $newFileName;

// Insert into DB using $conn
$stmt = $conn->prepare("
    INSERT INTO applications 
    (student_id, internship_title, internship_facility, resume_path, cover_letter, status)
    VALUES (?, ?, ?, ?, ?, 'Submitted')
");

if (!$stmt) {
    die("SQL ERROR: " . $conn->error);
}

$stmt->bind_param(
    "issss",
    $studentId,
    $internshipTitle,
    $internshipFacility,
    $resumePath,
    $coverLetter
);

// Redirect with success or error
if ($stmt->execute()) {
    header("Location: ../application.php?success=1");
} else {
    die("SQL ERROR: " . $stmt->error);
}
?>
