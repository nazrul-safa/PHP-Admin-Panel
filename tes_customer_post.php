<?php
session_start();
require_once 'includes/db.php';

$text = $_POST['text'];
$name = $_POST['name'];
$designation = $_POST['designation'];


$img_name = $_FILES['image']['name'];
$name_after_explode = explode(".", $img_name);
$extention = end($name_after_explode);
//upload img
$new_img_name =  time() . "." . rand(1000, 9999) .".". $extention;

$temp_loc = $_FILES['image']['tmp_name'];
$new_loc = "img/tes_customer/" . $new_img_name;

move_uploaded_file($temp_loc, $new_loc);

//database updae
$query = "INSERT into tes_customer(image,text,name,designation) VALUES('$new_img_name','$text','$name','$designation')";
mysqli_query($db_connect, $query);
$_SESSION['education'] = "Added successfully";
header('location:tes_customer.php');

