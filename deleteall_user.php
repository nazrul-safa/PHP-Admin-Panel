<?php
    session_start();
    require_once 'includes/db.php';

    $delete_all_query= "DELETE FROM users";
    $delete_from_db= mysqli_query($db_connect,$delete_all_query);
    if($delete_from_db){
        $_SESSION['text']= "Deleted All User Successfully";
        header('location:user_list.php');
    }
    else{
        echo "no";
    }
?>