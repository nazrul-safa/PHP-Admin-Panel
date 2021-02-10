<?php
   session_start();
   require_once 'includes/db.php';
   
   $full_name = $_POST['full_name'];
   $email_address = $_POST['email_address'];
   $password = md5($_POST['password']);
   
    
    $count_query="SELECT COUNT(*) AS total FROM users WHERE email_address = '$email_address' AND password = '$password'";
            $from_db= mysqli_query($db_connect, $count_query);
            $after_assoc = mysqli_fetch_assoc($from_db);
            if($after_assoc['total']==1)
            {
                $_SESSION['login_status']= "Yes";
                $name_query="SELECT full_name , profile_img , role FROM users WHERE email_address = '$email_address' AND password = '$password'";
                $from_db_name= mysqli_query($db_connect, $name_query);
                $after_assoc_name = mysqli_fetch_assoc($from_db_name);
                
                $_SESSION['name_from_login_page']= $after_assoc_name['full_name'];
                $_SESSION['email_add_from_login_page']= $email_address;
                $_SESSION['img_from_login_page']= $after_assoc_name['profile_img'];
                $_SESSION['role_from_login_page'] = $after_assoc_name['role'];
               

                header("location:dashbord.php");
            }
            else
            {
               
               $_SESSION['email_pass_error']= "Your Email or password is Wrong";
                header("location:login.php");
            }
?>  