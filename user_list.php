<?php
session_start();
require_once 'includes/header-starlight.php';
require_once 'includes/nav-starlight.php';
require_once 'includes/oop_db_connect.php';


$data_from_db = $db->all('users');

//$after_aasoc= mysqli_fetch_assoc($data_from_db);
//print_r ($after_aasoc);

?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="login.php">Login</a>
    <span class="breadcrumb-item active">User List</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>User List </h5>

      <div class="alert alert-info text-center">
        <a class="btn btn-danger" href="deleteall_user.php">Delete All</a>
      </div>
      <div class="alert alert-info">
        Total Users : <?= $data_from_db->num_rows ?>
      </div>

      <?php
      if (isset($_SESSION['text'])) {
      ?>
        <div class="alert alert-danger">
        <?php
        echo $_SESSION['text'];
        unset($_SESSION['text']);
      }
        ?>

        <?php
        if (isset($_SESSION['edit'])) {
        ?>
          <div class="alert alert-success">
          <?php
          echo $_SESSION['edit'];
          unset($_SESSION['edit']);
        }
          ?>
          </div>


          <table class="table table-bordered ">
            <thead>
              <tr>
                <th scope="col">Serial Number</th>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $serial_number = 1;
              foreach ($data_from_db as $user_info) :
              ?>

                <tr>
                  <td> <?= $serial_number++ ?> </td>
                  <td> <?= $user_info['id'] ?> </td>
                  <td> <?= strtoupper($user_info['full_name']) ?> </td>
                  <td> <?= $user_info['email_address'] ?> </td>
                  <td> <?= $user_info['gender'] ?> </td>
                  <td>
                    <a class="btn btn-outline-dark" href="edit_user.php?id=<?= $user_info['id'] ?>">Edit</a>
                    <a class="btn btn-outline-danger" href="delete_user.php?id=<?= $user_info['id'] ?>">Delete</a>
                  </td>

                </tr>

              <?php
              endforeach;
              ?>

              <?php if ($data_from_db->num_rows == 0) : ?>
                <tr>
                  <td colspan="50" class=text-center text-danger>No data Avaliable</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>



        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
</div>
  <!-- ########## END: MAIN PANEL ########## -->


  <?php
  include_once 'includes/footer-starlight.php';
  ?>