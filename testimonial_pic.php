<?php
session_start();
require_once 'includes/db.php';

$img_name = $_FILES['new_testimonial_pic']['name'];
$name_after_explode = explode(".", $img_name);
$extention = end($name_after_explode);

//upload img start
$new_img_name =  time() . "." . rand(1000, 9999).".". $extention;
$temp_loc = $_FILES['new_testimonial_pic']['tmp_name'];
$new_loc= "img/tes_img/". $new_img_name;
move_uploaded_file($temp_loc, $new_loc);
//upload img end

//database updae
$query= "INSERT into testimonial_pic(testimonial_pic) VALUES('$new_img_name')";
mysqli_query($db_connect,$query);
header('location:testimonial.php');
?>