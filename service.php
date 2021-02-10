<?php
session_start();

include_once 'includes/header-starlight.php';
include 'includes/nav-starlight.php';
require_once 'includes/oop_db_connect.php';
//services

$all_data_from_db=  $db->all('services')

//Shocase

?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">

        <a class="breadcrumb-item" href="service.php">Portfolio Edit</a>
        <span class="breadcrumb-item active">Serivice Edit</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Edit Service</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-white bg-dark mb-3 mt-3">
                            <div class="card-mb-3">

                                <div class="card-header bg-info">
                                    <h2 class="text-dark">Services</h2>
                                </div>

                                <div class="card-body">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Service Icon</th>
                                                <th scope="col">Service Title</th>
                                                <th scope="col">Service Description</th>
                                                <?php
                                                     if ($_SESSION['role_from_login_page'] != 'viwer') :
                                                    ?>
                                                <th scope="col">Status</th>
                                                <?php
                                                endif;
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($all_data_from_db as $data) :
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?= $data['id'] ?>
                                                    </td>
                                                    <td>
                                                        <i class="<?= $data['service_icon'] ?> "></i>
                                                    </td>
                                                    <td>
                                                        <?= $data['service_title'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $data['service_description'] ?>
                                                    </td>
                                                    <?php
                                                     if ($_SESSION['role_from_login_page'] != 'viwer') :
                                                    ?>

                                                    <td>
                                                        <?php
                                                        if ($data['status'] == 'active') :
                                                        ?>
                                                            <span class="badge badge-success">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="change_service_status.php?id=<?= $data['id'] ?>&what_to_do=deactive" class="btn btn-small btn-info">Make as Deactive</a>
                                                        <?php
                                                        else :
                                                        ?>
                                                            <span class="badge badge-danger">
                                                                <?= $data['status'] ?>
                                                            </span>
                                                            <a href="change_service_status.php?id=<?= $data['id'] ?>&what_to_do=active" class="btn btn-small btn-warning">Make as Active</a>
                                                        <?php
                                                        endif;
                                                        ?>
                                                    </td>
                                                     <?php
                                                     endif;
                                                     ?>
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

                                <div class="card-header bg-info">Add Services
                                </div>
                                <?php
                                if ($_SESSION['role_from_login_page'] == 'viwer') :
                                ?>
                                    <div class="alert alert-danger mt-3">
                                        Viewers are not alllowed to insert add service
                                    </div>
                                    
                                <?php
                                else :
                                ?>
                                    <form action="service_post.php" method="POST">
                                        <div class="card-body">
                                            <?php
                                            if (isset($_SESSION['service'])) :
                                            ?>
                                                <div class="alert alert-success">
                                                    <?= $_SESSION['service'] ?>
                                                    <?php
                                                    unset($_SESSION['service']);
                                                    ?>
                                                </div>
                                            <?php
                                            endif;
                                            ?>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Service Icon</label>
                                                <input type="text" class="form-control" name="service_icon">
                                                <a href="https://fontawesome.com/icons?m=free" target="_blank">icon list</a>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Service title</label>
                                                <input type="text" class="form-control" name="service_title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Service Description</label>
                                                <textarea name="service_description" class="form-control" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success "> Add service</button>
                                    </form>
                                <?php
                                endif;
                                ?>


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