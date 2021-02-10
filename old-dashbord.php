<?php
session_start();
if (!isset($_SESSION['login_status'])) {
    header("location:login.php");
}

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item active">Dashbord</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Admin Dashbord</h5>

            <div class="card bd-0">
                <div class="card-header card-header-default bg-primary">
                    Dashbord
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0 rounded-bottom">
                    <h1>Welcome to Our Website</h1>
                    
                    <h2>Role:
                        <?=$_SESSION['role_from_login_page']; ?>
                    </h2>
                    <h2>Name:
                        <?= $_SESSION['name_from_login_page']; ?>
                    </h2>
                    <br>
                    <h2>Email:
                        <?= $_SESSION['email_add_from_login_page']; ?>
                    </h2>
                </div><!-- card-body -->
            </div>


        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div>




<?php
include_once 'includes/footer-starlight.php';
?>