<?php
session_start();
require_once 'includes/db.php';

$hello = $_POST['hello'];
$name = $_POST['name'];
$self_intro = $_POST['self_intro'];


$img_name = $_FILES['image']['name'];
$name_after_explode = explode(".", $img_name);
$extention = end($name_after_explode);
//upload img
$new_img_name =  time() . "." . rand(1000, 9999) . "." . $extention;

$temp_loc = $_FILES['image']['tmp_name'];
$new_loc = "img/home/" . $new_img_name;

move_uploaded_file($temp_loc, $new_loc);

//database updae
$query = "INSERT into home(hello,name,self_intro,image) VALUES('$hello','$name','$self_intro','$new_img_name')";
mysqli_query($db_connect, $query);

$_SESSION['home'] = "Added successfully";
header('location:home.php');
