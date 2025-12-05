<?php
session_start();
require "../../config/connection.php";

if(!isset($_SESSION['logged_in'])){
    header("Location: ../signin.php");
    exit;
}

$id = $_SESSION['user_id'];

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$location = trim($_POST['location']);
$program = trim($_POST['program']);
$program_level = trim($_POST['program_level']);
$about = trim($_POST['about']);
$focus = trim($_POST['focus']);
$availability = trim($_POST['availability']);

$q = $conn->prepare("UPDATE accounts SET name=?, email=?, phone=?, location=?, program=?, program_level=?, about=?, focus=?, availability=? WHERE id=?");
$q->bind_param("sssssssssi", $name, $email, $phone, $location, $program, $program_level, $about, $focus, $availability, $id);
$q->execute();

$_SESSION['name'] = $name;
$_SESSION['success']="Profile updated successfully!";
header("Location: ../learner-profile.php");
exit;
?>
