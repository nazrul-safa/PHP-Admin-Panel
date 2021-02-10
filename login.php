<?php
session_start();
if (isset($_SESSION['login_status'])) {
    header("location:dashbord.php");
}
include_once 'includes/header-starlight.php';

?>


<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Nazrul Islam<span class="tx-info tx-normal">Safa</span></div>
        <div class="tx-center mg-b-60">Admin</div>
        <?php
        if (isset($_SESSION['reg_success'])) {
        ?>
          <div class="alert alert-success">
            <?php
            echo $_SESSION['reg_success'];
            unset($_SESSION['reg_success']);
            ?>
          </div>
        <?php
        }
        ?>

        <form action="login_post.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email_address">

                <?php
                if (isset($_SESSION['email_pass_error'])) {
                ?>
                    <small class="text-danger">
                        <?php
                        echo $_SESSION['email_pass_error'];
                        unset($_SESSION['email_pass_error']);
                        ?>
                    </small>
                <?php
                }
                ?>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <div class="mg-t-60 tx-center">Not yet a member? <a href="registration.php" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->


<?php
include_once 'includes/footer-starlight.php';
?>