<?php
session_start();
require_once 'includes/oop_db_connect.php';

$service_icon = $_POST['service_icon'];
$service_title = $_POST['service_title'];
$service_description = $_POST['service_description'];
$db->insert('services', $service_icon, $service_title, $service_description);
$_SESSION['service']="Services Added successfully";
header('location:service.php');

?>