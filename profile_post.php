<?php
session_start();
require_once 'includes/db.php';
$email_address = $_SESSION['email_add_from_login_page']; 
$encrypt_password =  md5($_POST['old_password']);
$encrypt_new_password =  md5($_POST['new_password']); 
$encrypt_confirm_password =  md5($_POST['confirm_password']);  
$check_query="SELECT COUNT(*) AS total FROM users WHERE email_address= '$email_address' AND password= '$encrypt_password'";
   
if((mysqli_fetch_assoc(mysqli_query($db_connect,$check_query))['total'])==1){
   if($encrypt_new_password==$encrypt_confirm_password){
      $update_pass_query = "UPDATE users SET password = '$encrypt_confirm_password' WHERE email_address = '$email_address'";
      $after_update_pass_query =  mysqli_query($db_connect,$update_pass_query);       
            $_SESSION['update_pass']= "Your password Updated Successfully";
            header('location:profile_edit.php'); 
   }
   else {  
      $_SESSION['update_not_pass']= "New Password and Confirm Password does not match";
      header('location:profile_edit.php');         
   }  
}
else{
   $_SESSION['not_found_pass']="Old Password Does not matched"; 
   header('location:profile_edit.php');   
}
?>