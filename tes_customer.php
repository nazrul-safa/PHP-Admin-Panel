<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/db.php';
//Shocase
$all_services_query = "SELECT * FROM tes_customer";
$all_data_from_db_education = mysqli_query($db_connect, $all_services_query);

?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="tes_customer.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Customer Comment </span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Customer Comment</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h2 class="text-dark">Add Comments</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Text</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Designation</th>
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
                                                        <img src="img/tes_customer/<?= $data['image'] ?>" alt="">
                                                    </td>
                                                    <td>
                                                        <?= $data['text'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['name'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['designation'] ?>
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

                                <div class="card-header bg-info">Add QUOTES
                                </div>
                                <form action="tes_customer_post.php" method="POST" enctype="multipart/form-data">
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
                                            <label for="exampleInputPassword1">New photo </label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Text</label>
                                            <textarea name="text" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Designation</label>
                                            <input type="text" class="form-control" name="designation">
                                        </div>
                                        <button type="submit" class="btn btn-success "> Add QUOTES</button>
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