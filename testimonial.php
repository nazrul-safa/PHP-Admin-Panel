<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/oop_db_connect.php';

$all_data_from_db_testimonial = $db->all('testimonial_pic');
?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="testimonial.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Brand Image </span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Brand Image</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 ">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h4 class="text-dark">Brand Image</h4>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">TESTIMONIAL Picture</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_testimonial as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <img src="img/tes_img/<?= $data['testimonial_pic'] ?>" alt="">
                                                    </td>


                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">Add Images
                                </div>
                                <form action="testimonial_pic.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New profile photo </label>
                                        <input type="file" class="form-control" name="new_testimonial_pic">

                                    </div>

                                    <button type="submit" class="btn btn-success ">Change Tes. photo</button>

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