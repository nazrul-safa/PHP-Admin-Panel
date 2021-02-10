<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//Shocase
$all_services_query = "SELECT * FROM showcases";
$all_data_from_db_showcase = mysqli_query($db_connect, $all_services_query);

?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="showcase.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Showcase Edit</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Showcase Edit</h5>

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h2 class="text-dark">Portfolio Showcase</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Showcase Icon</th>
                                                <th scope="col">Showcase Title</th>
                                                <th scope="col">Showcase Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_showcase as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <i class="<?= $data['showcase_icon'] ?>"></i>
                                                    </td>
                                                    <td>
                                                        <?= $data['showcase_title'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['showcase_description'] ?>
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

                                <div class="card-header bg-info">Add Portfolio showcase
                                </div>
                                <form action="showcase_post.php" method="POST">
                                    <div class="card-body">
                                        <?php
                                        if (isset($_SESSION['showcase'])) :
                                        ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['showcase'] ?>
                                                <?php
                                                unset($_SESSION['showcase']);
                                                ?>
                                            </div>
                                        <?php
                                        endif;
                                        ?>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Showcase Icon</label>
                                            <input type="text" class="form-control" name="showcase_icon">
                                            <a href="https://fontawesome.com/icons?m=free" target="_blank">icon list</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Showcase title</label>
                                            <input type="number" class="form-control" name="showcase_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Showcase Description</label>
                                            <textarea name="showcase_description" class="form-control" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success "> Add Portfolio showcase</button>
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