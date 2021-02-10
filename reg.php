<?php
session_start();
    require_once 'includes/db.php';

   $full_name = $_POST['full_name'];
   $email_address = $_POST['email_address'];
   $password = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];
   $gender = $_POST['gender'];
    if (!$_POST['full_name']) {
    $_SESSION['fillup_name'] = "Please input your name first";
    header('location: registration.php'); 
    die();       
    }
    if (!$_POST['email_address']) {
    $_SESSION['fillup_email'] = "Please input your email first";
    header('location: registration.php');
    }
    else{
    
    if($password==$confirm_password){
            $count_query="SELECT COUNT(*) AS total FROM users WHERE email_address = '$email_address'";
            $from_db= mysqli_query($db_connect, $count_query);
            $after_assoc = mysqli_fetch_assoc($from_db);
            if($after_assoc['total']==0)
            {
                $encrypt_password=md5($password);
                $insert_query = "INSERT INTO users (full_name,email_address,password,gender) VALUES ('$full_name', '$email_address', '$encrypt_password','$gender')";
                mysqli_query($db_connect,$insert_query);
                $_SESSION['reg_success']= "Registration Done Successfully.Login Now";
                header("location: login.php");
            }
            else
            {
                $_SESSION['duplicate_email_error']= "This email is  already been used ";
                header("location:registration.php");
            }
            
            
            
        }
    else {
        $_SESSION['pass_dont_matched'] = "Password is not Matched";
        header("location:registration.php");
    }
} 

?>