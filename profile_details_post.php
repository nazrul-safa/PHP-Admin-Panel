<?php
session_start();
require_once 'includes/db.php';
$portfolio_title = $_POST['portfolio_title'];
$portfolio_details = $_POST['portfolio_text'];
$post_by = $_SESSION['email_add_from_login_page'];



//For extention stat
$thumbnail_img_name = $_FILES['portfolio_thumbnail']['name'];
$name_after_explode = explode(".", $thumbnail_img_name);
$extention = end($name_after_explode);
//For extention End


//upload img start
$thumbnail_new_img_name =  time() . "." . rand(1000, 9999).".". $extention;
$temp_loc = $_FILES['portfolio_thumbnail']['tmp_name'];
$new_loc= "img/portfolio/thumbnail/". $thumbnail_new_img_name;
move_uploaded_file($temp_loc, $new_loc);
//upload img end


//Feature hpotos
//For extention stat
$feature_img_name = $_FILES['portfolio_feature_photos']['name'];
$name_after_explode = explode(".", $feature_img_name);
$extention = end($name_after_explode);
//For extention End


//upload img start
$feature_thumbnail_new_img_name =  time() . "." . rand(1000, 9999) . "." . $extention;
$temp_loc = $_FILES['portfolio_feature_photos']['tmp_name'];
$new_loc = "img/portfolio/feature/" . $feature_thumbnail_new_img_name;
move_uploaded_file($temp_loc, $new_loc);
//upload img end



//database updae
$query= "INSERT into portfolio_details (post_by, portfolio_title, portfolio_text, portfolio_thumbnail,portfolio_feature_photos) VALUES('$post_by', '$portfolio_details' , '$portfolio_details',  '$thumbnail_new_img_name ', '$feature_thumbnail_new_img_name')";
mysqli_query($db_connect,$query);
header('location:profile_details.php');
?>