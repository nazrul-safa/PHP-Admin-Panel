<?php
require_once 'includes/oop_db_connect.php';
$id = $_GET['id'];
$what_to_do = $_GET['what_to_do'];
$db->update_service('services', $what_to_do, $id);
header('location:service.php');
?>