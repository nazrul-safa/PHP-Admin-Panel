<?php
session_start();
require_once 'includes/header-starlight.php';

?>


<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

  <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
    <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Nazrul Islam <span class="tx-info tx-normal">Safa</span></div>
    <div class="tx-center mg-b-60">Admin </div>

    <form action="reg.php" method="POST">
      <div class="form-group">

        <input type="text" class="form-control" placeholder="Enter your Full Name" name="full_name">
        <?php
        if (isset($_SESSION['fillup_name'])) {
        ?>
          <small class="text-danger">
            <?php
            echo $_SESSION['fillup_name'];
            unset($_SESSION['fillup_name']);
            ?>
          </small>
        <?php
        }
        ?>
      </div>
      <div class="form-group">

        <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email_address">
        <?php
        if (isset($_SESSION['fillup_email'])) {
        ?>
          <small class="text-danger">
            <?php
            echo $_SESSION['fillup_email'];
            unset($_SESSION['fillup_email']);
            ?>
          </small>
        <?php
        }
        ?>
        <?php
        if (isset($_SESSION['duplicate_email_error'])) {
        ?>
          <small class="text-danger">
            <?php
            echo $_SESSION['duplicate_email_error'];
            unset($_SESSION['duplicate_email_error']);
            ?>
          </small>
        <?php
        }
        ?>

      </div>

      <div class="form-group">

        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Your Password">
      </div>
      <div class="form-group">

        <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password" placeholder="Confirm Password">
        <?php
        if (isset($_SESSION['pass_dont_matched'])) {
        ?>
          <small class="text-danger">
            <?php
            echo $_SESSION['pass_dont_matched'];
            unset($_SESSION['pass_dont_matched']);
            ?>
          </small>
        <?php
        }
        ?>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Gender</label>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

      </div>

      <button type="submit" class="btn btn-info btn-block">Sign Up</button>
    </form>



    <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
  </div><!-- login-wrapper -->
</div><!-- d-flex -->





<?php
include_once 'includes/footer-starlight.php';
?>