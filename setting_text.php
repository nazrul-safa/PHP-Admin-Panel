<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//text_setting
$all_text_setting = "SELECT * FROM text_setting";
$all_data_from_db = mysqli_query($db_connect, $all_text_setting);
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">

        <a class="breadcrumb-item" href="setting_text.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">General Setting </span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5> General Setting</h5>
            <div class="container">
                <div class="row mt-3">

                    <div class="col-6 m-auto">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">General Setting
                                </div>
                                <?php
                                if (isset($_SESSION['status'])) :
                                ?>
                                    <div class="alert alert-success">
                                        <?= $_SESSION['status'] ?>
                                        <?php
                                        unset($_SESSION['status']);
                                        ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <form action="setting_text_post.php" method="POST">
                                    <div class="card-body">

                                        <?php
                                        foreach ($all_data_from_db as $text_setting) :
                                        ?>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1"><?= $text_setting['setting_name'] ?></label>
                                                <input type="text" value="<?= $text_setting['setting_value'] ?>" class="form-control" name="<?= $text_setting['setting_name'] ?>">
                                            </div>
                                        <?php
                                        endforeach;
                                        ?>
                                        <button type="submit" class="btn btn-success "> Update Now </button>
                                </form>

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