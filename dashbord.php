<?php
session_start();
if (!isset($_SESSION['login_status'])) {
    header("location:login.php");
}

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
$login_email = $_SESSION['email_add_from_login_page'];
$img_name_query = "SELECT profile_img FROM users WHERE email_address='$login_email'";
$result_img_name_query = mysqli_fetch_assoc(mysqli_query($db_connect, $img_name_query))["profile_img"];
//photos query
$email_add_from_login_page = $_SESSION['email_add_from_login_page'];
$select_profile_pic_query = "SELECT profile_img FROM users WHERE email_address='$email_add_from_login_page'";
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Safa</a>
        <a class="breadcrumb-item" href="login.php">Login</a>
        <span class="breadcrumb-item active">Dashbord</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5 class="m-auto">Admin Dashbord</h5>

            <div class=" card bd-0 mt-3">
                <div class="card-header card-header-default bg-dark">
                    <h1 class="m-auto ">Hello <?= $_SESSION['name_from_login_page']; ?> ! Welcome To Your Dashbord </h1>
                </div><!-- card-header -->
                <div class=" row">
                    <div class="col-12 mt-3">
                        <div class="card card-body tx-white bg-dark bd-0 ">

                            <img src="img/profile_img/<?= mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] ?>" class="wd-300 rounded-circle m-auto" alt="">

                            <br>

                            <h2 class="m-auto">Name:
                                <?= $_SESSION['name_from_login_page']; ?>
                            </h2>
                            <br>
                            <h2 class="m-auto">Email:
                                <?= $_SESSION['email_add_from_login_page']; ?>
                            </h2>

                        </div>
                    </div>

                </div>



            </div>


        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div>




<?php
include_once 'includes/footer-starlight.php';
?>