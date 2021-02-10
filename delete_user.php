<?php
    session_start();
    require_once 'includes/db.php';


    $id= $_GET['id'];
    $delete_query= "DELETE FROM users WHERE id=$id";
    $delete_from_db= mysqli_query($db_connect,$delete_query);
    if($delete_from_db){
        $_SESSION['text']= "Deleted User Successfully";
        header('location:user_list.php');
    }
    else{
        echo "no";
    }
?>