<?php
require_once 'includes/db.php';
$picture_name = $_GET['pic_name'];
unlink("img/profile_img/". $picture_name);
$upadte_in_db="UPDATE users SET profile_img='default.png' WHERE profile_img='$picture_name'";
mysqli_query($db_connect, $upadte_in_db);
header('location:profile_edit.php');
?>