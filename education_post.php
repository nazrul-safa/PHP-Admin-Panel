<?php
session_start();
require_once 'includes/db.php';

$skills = $_POST['skills'];
$degree = $_POST['degree'];
$percentage = $_POST['percentage'];

$insert_query = "INSERT into education (skills, degree, percentage) VALUES('$skills','$degree','$percentage')";
mysqli_query($db_connect, $insert_query);
$_SESSION['education'] = "Added successfully";
header('location:education.php');
