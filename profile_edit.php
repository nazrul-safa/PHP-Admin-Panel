<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
$email_add_from_login_page = $_SESSION['email_add_from_login_page'];
$select_profile_pic_query = "SELECT profile_img FROM users WHERE email_address='$email_add_from_login_page'";
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="login.php">Login</a>
        <span class="breadcrumb-item active">User List</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Profile Edit</h5>
            <div class="row">
                <div class="col-6">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-mb-3">
 
                            <div class="card-header bg-info">
                                <h2 class="text-dark"><?= $_SESSION['name_from_login_page']; ?></h2>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="border" width="200" src="img/profile_img/<?= mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] ?>" alt="Not found">
                                    <?php

                                    if (mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] != "default.png") :
                                    ?>
                                        <br>
                                        <a style="mt-3px" href="delete_profile_pic.php?pic_name=<?= mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] ?> " class="btn btn-danger">Delete Now</a>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <form action="profile-img_post.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New profile photo </label>
                                        <input type="file" class="form-control" name="new_profile_img">
                                        <?php
                                        if (isset($_SESSION['give_pic'])) {
                                        ?>
                                            <small class="text-danger">
                                                <?php
                                                echo $_SESSION['give_pic'];
                                                unset($_SESSION['give_pic']);
                                                ?>
                                            </small>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if (isset($_SESSION['file_format'])) {
                                        ?>
                                            <small class="text-danger">
                                                <?php
                                                echo $_SESSION['file_format'];
                                                unset($_SESSION['file_format']);
                                                ?>
                                            </small>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if (isset($_SESSION['file_size'])) {
                                        ?>
                                            <small class="text-danger">
                                                <?php
                                                echo $_SESSION['file_size'];
                                                unset($_SESSION['file_size']);
                                                ?>
                                            </small>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <button type="submit" class="btn btn-success ">Change Profile photo</button>

                                </form>
                                <?php
                                if (isset($_SESSION['profile_photo_change'])) {
                                ?>
                                    <div class="alert alert-success mt-5">

                                        <?php
                                        echo $_SESSION['profile_photo_change'];
                                        unset($_SESSION['profile_photo_change']);
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-white bg-dark mb-3 ">
                        <div class="card-mb-3">

                            <div class="card-header bg-info">Change Password
                            </div>
                            <form action="profile_post.php" method="POST">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Password</label>
                                        <input type="password" class="form-control" name="old_password" id="old_password ">
                                        <input type="checkbox" onclick="showPassword()">Show Password
                                        <script>
                                            function showPassword() {
                                                var x = document.getElementById("old_password");
                                                if (x.type === "password") {
                                                    x.type = "text";
                                                } else {
                                                    x.type = "password";
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" class="form-control" name="new_password">
                                    </div>
                                    <div class="form-group">


                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password">
                                    </div>

                                    <button type="submit" class="btn btn-success ">Change Password</button>
                            </form>
                            <?php
                            if (isset($_SESSION['update_pass'])) {
                            ?>
                                <div class="alert alert-success mt-5">
                                <?php
                                echo $_SESSION['update_pass'];
                                unset($_SESSION['update_pass']);
                            }
                                ?>
                                <?php
                                if (isset($_SESSION['update_not_pass'])) {
                                ?>
                                    <div class="alert alert-danger mt-5">
                                    <?php
                                    echo $_SESSION['update_not_pass'];
                                    unset($_SESSION['update_not_pass']);
                                }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['not_found_pass'])) {
                                    ?>
                                        <div class="alert alert-danger mt-5">
                                        <?php
                                        echo $_SESSION['not_found_pass'];
                                        unset($_SESSION['not_found_pass']);
                                    }
                                        ?>
                                        </div>
                                    </div>
                                </div>

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