<?php
    session_start();
    require_once 'includes/db.php';
    $login_email = $_SESSION['email_add_from_login_page'];


    $img_name_query = "SELECT profile_img FROM users WHERE email_address='$login_email'";
    $result_img_name_query = mysqli_fetch_assoc(mysqli_query($db_connect, $img_name_query))["profile_img"];
    
    if($result_img_name_query != "default.png"){
        unlink("img/profile_img/".$result_img_name_query);
    }

   // print_r($_FILES); //File upload korle file diye dhorte hoy

    // img upload end //////////////////////////////////////////////////////////////////////////

    $img_name = $_FILES["new_profile_img"]["name"];


    //extension check start
    $after_explode_name = explode(".",$img_name);
    $extension = end($after_explode_name);
    
    $valid_img_extension = array("jpg","JPG","png","PNG");

    $valid_img_value = in_array($extension, $valid_img_extension);

    if(!$valid_img_value){
        $_SESSION["img_valid_format_notice"] = "please input valid format";
        header('location: profile_edit.php');
        die();
    }
    //extension checek end

    // default image set name start

    $select_id_query = "SELECT id FROM users WHERE email_address='$login_email'";
    $result_id = mysqli_fetch_assoc(mysqli_query($db_connect, $select_id_query))['id'];
    
    $new_img_name = $result_id.".".$extension;


    
    // default image set name end

    $temp_location = $_FILES["new_profile_img"]["tmp_name"];
    $new_location = "img/profile_img/".$new_img_name;

    move_uploaded_file($temp_location, $new_location);

   // img upload end /////////////////////////////////////////////////////////////////////////


    $image_name_set_query ="UPDATE users SET profile_img= '$new_img_name' WHERE email_address='$login_email'";
    $result = mysqli_query($db_connect, $image_name_set_query);
    if ($result) {
        $_SESSION["profile_photo_change"] = "Image Uploaded Successfully";
        header('location: profile_edit.php');
    } else {
        $_SESSION["img_upload_fail_notice"] = "Image Uploaded Failed";
        header('location: profile_edit.php');
    }
?>
    

