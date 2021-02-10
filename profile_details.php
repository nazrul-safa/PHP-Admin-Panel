<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
$all_tes_query_tes = "SELECT * FROM testimonial_pic";
$all_data_from_db_testimonial = mysqli_query($db_connect, $all_tes_query_tes);
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">

        <a class="breadcrumb-item" href="profile_details.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Edit Profile details</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Portfolio</h5>
            <div class="col-6 m-auto">
                <div class="card text-white bg-dark mb-3 ">
                    <div class="card-mb-3">

                        <div class="card-header bg-info">Add Portfolio
                        </div>
                        <form action="profile_details_post.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputPassword1">portfolio_title</label>
                                <input type="text" class="form-control" name="portfolio_title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">portfolio_details</label>
                                <textarea name="portfolio_text" id="" cols="30" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Portfolio_thumbnail</label>
                                <input type="file" class="form-control" name="portfolio_thumbnail">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Portfolio_feture_photos</label>
                                <input type="file" class="form-control" name="portfolio_feature_photos">
                            </div>

                            <button type="submit" class="btn btn-success ">Change Portfolio</button>

                        </form>

                    </div>
                </div>
            </div>
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div>





<?php
include_once 'includes/footer-starlight.php';
?>