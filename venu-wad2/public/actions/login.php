<?php
session_start();
require "../../config/connection.php";
$email=trim($_POST['email']);
$pass=trim($_POST['password']);
$role=$_POST['role'];
$q=$conn->prepare("SELECT id,name,password,role FROM accounts WHERE email=? AND role=?");
$q->bind_param("ss",$email,$role);
$q->execute();
$r=$q->get_result()->fetch_assoc();
if($r && password_verify($pass,$r['password'])){
$_SESSION['logged_in']=true;
$_SESSION['user_id']=$r['id'];
$_SESSION['role']=$r['role'];
$_SESSION['name']=$r['name'];
if($role==="student"){header("Location: ../learner-profile.php");exit;}
if($role==="employer"){header("Location: ../partner-profile.php");exit;}
if($role==="admin"){header("Location: ../analytics.php");exit;}
}
$_SESSION['error']="Invalid credentials.";
header("Location: ../signin.php");
?>
