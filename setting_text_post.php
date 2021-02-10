<?php
session_start();
require_once 'includes/db.php';

 foreach($_POST as $setting_name => $setting_value ){
  
    echo $update_query = "UPDATE text_setting SET setting_value='$setting_value' WHERE setting_name='$setting_name'";
    mysqli_query($db_connect,$update_query);

 }
 $_SESSION['status']="Setting updated succefully";
 header('location:setting_text.php');
?>