<?php
session_start();
require "../config/db.php";

if(!isset($_SESSION['logged_in'])) {
    header("Location: ../login.php");
    exit;
}

$id = $_SESSION['user_id'];
$current = trim($_POST['current']);
$new = trim($_POST['new']);
$confirm = trim($_POST['confirm']);

if(empty($current) || empty($new) || empty($confirm)) {
    $_SESSION['success'] = "All password fields are required.";
    header("Location: ../student-profile.php");
    exit;
}

if($new !== $confirm){
    $_SESSION['success'] = "New passwords do not match.";
    header("Location: ../student-profile.php");
    exit;
}

$q = $conn->prepare("SELECT password FROM users WHERE id=?");
$q->bind_param("i", $id);
$q->execute();
$user = $q->get_result()->fetch_assoc();

if(!$user || !password_verify($current, $user['password'])){
    $_SESSION['success'] = "Incorrect current password.";
    header("Location: ../student-profile.php");
    exit;
}

$newHash = password_hash($new, PASSWORD_DEFAULT);
$u = $conn->prepare("UPDATE users SET password=? WHERE id=?");
$u->bind_param("si", $newHash, $id);
$u->execute();

$_SESSION['success'] = "Password updated successfully.";
header("Location: ../student-profile.php");
exit;
?>
