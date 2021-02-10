<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//Shocase
$all_services_query = "SELECT * FROM home";
$all_data_from_db_home = mysqli_query($db_connect, $all_services_query);

?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="home.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Home Edit</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Home Edit</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 mt-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h2 class="text-dark">Home Page</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Hello!</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Self intro</th>
                                                <th scope="col">image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db_home as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>

                                                    <td>
                                                        <?= $data['hello'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['name'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['self_intro'] ?>
                                                    </td>
                                                    <td>
                                                        <img src="img/home/<?= $data['image'] ?>" alt="" style="width: 100px;">
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

                                <div class="card-header bg-info">Add in Home page
                                </div>
                                <form action="home_post.php" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <?php
                                        if (isset($_SESSION['home'])) :
                                        ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['home'] ?>
                                                <?php
                                                unset($_SESSION['home']);
                                                ?>
                                            </div>
                                        <?php
                                        endif;
                                        ?>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Hello!</label>
                                            <input type="text" class="form-control" name="hello">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Self Intro</label>
                                            <textarea name="self_intro" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New photo </label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <button type="submit" class="btn btn-success "> Add home page</button>
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