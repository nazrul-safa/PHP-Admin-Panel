<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//Shocase
$all_services_query = "SELECT * FROM education";
$all_data_from_db_education = mysqli_query($db_connect, $all_services_query);

?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="education.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Add Skills </span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Skills</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 mt-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h2 class="text-dark">Skills</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Skills</th>
                                                <th scope="col">Topics</th>
                                                <th scope="col">Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_education as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['skills'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['degree'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['percentage'] ?>
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
                        <div class="card text-white bg-dark mb-3 mt-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">Add Skills
                                </div>
                                <form action="education_post.php" method="POST">
                                    <div class="card-body">
                                        <?php
                                        if (isset($_SESSION['education'])) :
                                        ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['education'] ?>
                                                <?php
                                                unset($_SESSION['education']);
                                                ?>
                                            </div>
                                        <?php
                                        endif;
                                        ?>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Skills</label>
                                            <input type="text" class="form-control" name="skills">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Degree</label>
                                            <input type="text" class="form-control" name="degree">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Percentage</label>
                                            <input type="number" class="form-control" name="percentage">
                                        </div>
                                        <button type="submit" class="btn btn-success "> Add Skills</button>
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