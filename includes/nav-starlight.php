<!-- ########## START: LEFT PANEL ########## -->
<?php
include_once 'includes/header-starlight.php';
require_once 'includes/db.php';
$email_add_from_login_page = $_SESSION['email_add_from_login_page'];
$select_profile_pic_query = "SELECT profile_img FROM users WHERE email_address='$email_add_from_login_page'";
?>
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Safa</a></div>
<div class="sl-sideleft">
    <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
            <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
        <a href="dashbord.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div>
        </a>
        <a href="profile_edit.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Profile Edit</span>
            </div>
        </a>
        <a href="user_list.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">User List</span>
            </div>
        </a>

        <a href="profile_details.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Portfolio Details</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="service.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Service Edit</span>
            </div><!-- menu-item -->
        </a>
        <a href="home.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Home Edit</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="setting_text.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">General Setting</span>
            </div><!-- menu-item -->
        </a>
        <a href="education.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Add Skills</span>
            </div><!-- menu-item -->
        </a>
        <a href="tes_customer.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Client Comment</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="testimonial.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Brand Image Edit</span>
            </div><!-- menu-item -->
        </a>
        <a href="showcase.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Portfolio Showcase Edit</span>
            </div><!-- menu-item -->
        </a>
        <a href="logout.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Sign Out</span>
            </div><!-- menu-item -->
        </a>

    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name"><?= $_SESSION['name_from_login_page'] ?></span>
                    <img src="img/profile_img/<?= mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] ?>" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="profile_edit.php"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href="setting_text.php"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                        <li><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->