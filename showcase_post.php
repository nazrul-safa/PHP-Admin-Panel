<?php
session_start();
require_once 'includes/db.php';

$showcase_icon = $_POST['showcase_icon'];
$showcase_title = $_POST['showcase_title'];
$showcase_description = $_POST['showcase_description'];

$insert_query= "INSERT into showcases(showcase_icon, showcase_title, showcase_description) VALUES('$showcase_icon','$showcase_title','$showcase_description')";
mysqli_query($db_connect, $insert_query);
$_SESSION['showcase']="Serices Added successfully";
header('location:showcase.php');
