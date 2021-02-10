<br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Safa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="registration.php">Registration</a>
            </li>
            <?php
            if (!isset($_SESSION['login_status'])) :
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php
            endif;
            ?>
            <li class="nav-item">
                <a class="nav-link" href="user_list.php">User List</a>
            </li>
            <?php
            if (isset($_SESSION['login_status'])) :
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="setting_text.php">Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting_img.php">Setting_Img</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home Edit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="education.php">Education</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tes_customer.php">Customer Q.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimonial.php">Brand</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="showcase.php">Showcase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile_edit.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile_details.php">Portfolio Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-danger text-white" href="logout.php">Logout</a>
                </li>
            <?php
            endif;
            ?>
        </ul>
    </div>
</nav>