<?php 
require_once 'includes/db.php';
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$insert= "INSERT INTO contact (name,email,message) VALUES('$name','$email','$message')";
mysqli_query($db_connect,$insert);
header('location:index.php#contact');
$_SESSION['contact']="Your Messege Successfully Send";
?>