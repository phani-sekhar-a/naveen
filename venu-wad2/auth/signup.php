<?php
session_start();
require "../config/db.php";
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
$role=$_POST['role'];
$q=$conn->prepare("INSERT INTO users(name,email,password,role) VALUES(?,?,?,?)");
$q->bind_param("ssss",$name,$email,$pass,$role);
if($q->execute()){
$_SESSION['success']="Account created.";
header("Location: ../login.php");
}else{
$_SESSION['error']="Email exists.";
header("Location: ../signup.php");
}
?>
