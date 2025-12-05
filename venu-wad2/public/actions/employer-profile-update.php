<?php
session_start();
require "../../config/connection.php";

if(!isset($_SESSION['logged_in']) || $_SESSION['role'] !== "employer") {
    header("Location: ../signin.php");
    exit;
}

$id = $_SESSION['user_id'];

$company_name = trim($_POST['company_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['company_phone']);
$location = trim($_POST['company_location']);
$focus = trim($_POST['company_focus']);
$about = trim($_POST['company_about']);

$sql = "UPDATE accounts SET company_name=?, email=?, company_phone=?, company_location=?, company_focus=?, company_about=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $company_name, $email, $phone, $location, $focus, $about, $id);
$stmt->execute();

$_SESSION['success'] = "Company profile updated successfully.";
header("Location: ../partner-profile.php");
exit;
