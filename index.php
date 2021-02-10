<?php
session_start();
require_once 'includes/db.php';
//Services
$all_services_query = "SELECT * FROM services WHERE status= 'active'  ORDER BY id DESC LIMIT 6 ";
$all_data_from_db = mysqli_query($db_connect, $all_services_query);
//Showcase
$all_services_query = "SELECT * FROM showcases ORDER BY id DESC LIMIT 4 ";
$all_data_from_db_showcase = mysqli_query($db_connect, $all_services_query);
//Tes

//education
$all_edu_query = "SELECT * FROM education";
$all_data_from_db_edu = mysqli_query($db_connect, $all_edu_query);
//tes_qut
$all_qut_query = "SELECT * FROM tes_customer";
$all_data_from_db_qut = mysqli_query($db_connect, $all_qut_query);
//tes_pic
$all_qut_queryy = "SELECT * FROM testimonial_pic";
$all_data_from_db_tes = mysqli_query($db_connect, $all_qut_queryy);
//home
$all_qut_query = "SELECT * FROM home";
$all_data_from_db_home = mysqli_query($db_connect, $all_qut_query);
//owner name
$owner_name_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='owner_name' ";
$owner_name_from_text_setting = mysqli_query($db_connect, $owner_name_selcet_query);
$asoc_name = mysqli_fetch_assoc($owner_name_from_text_setting)['setting_value'];
//owner bio 
$owner_bio_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='owner_bio' ";
$owner_bio_from_text_setting = mysqli_query($db_connect, $owner_bio_selcet_query);
$asoc_bio = mysqli_fetch_assoc($owner_bio_from_text_setting)['setting_value'];
//owner socail link
//fb-link
$owner_fb_link_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='fb_link' ";
$owner_fb_link_from_text_setting = mysqli_query($db_connect, $owner_fb_link_selcet_query);
$asoc_fb_link = mysqli_fetch_assoc($owner_fb_link_from_text_setting)['setting_value'];
//tw-link
$owner_tw_link_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='tw_link' ";
$owner_tw_link_from_text_setting = mysqli_query($db_connect, $owner_tw_link_selcet_query);
$asoc_tw_link = mysqli_fetch_assoc($owner_tw_link_from_text_setting)['setting_value'];

//about-info
$owner_about_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='owner_about' ";
$owner_about_from_text_setting = mysqli_query($db_connect, $owner_about_selcet_query);
$asoc_about_info = mysqli_fetch_assoc($owner_about_from_text_setting)['setting_value'];

//contact-info
$contact_info_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='contact_info' ";
$contact_info_selcet_query_from_text_setting = mysqli_query($db_connect, $contact_info_selcet_query);
$asoc_contact_info = mysqli_fetch_assoc($contact_info_selcet_query_from_text_setting)['setting_value'];

//contact_address

$contact_address_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='contact_address' ";
$contact_address_selcet_query_from_text_setting = mysqli_query($db_connect, $contact_address_selcet_query);
$asoc_contact_address = mysqli_fetch_assoc($contact_address_selcet_query_from_text_setting)['setting_value'];

//contact-phone
$contact_phone_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='contact_phone' ";
$contact_phone_selcet_query_from_text_setting = mysqli_query($db_connect, $contact_phone_selcet_query);
$asoc_contact_phone = mysqli_fetch_assoc($contact_phone_selcet_query_from_text_setting)['setting_value'];

//contact_email

$contact_email_selcet_query = "SELECT setting_value FROM text_setting WHERE setting_name='contact_email' ";
$contact_email_selcet_query_from_text_setting = mysqli_query($db_connect, $contact_email_selcet_query);
$asoc_contact_email = mysqli_fetch_assoc($contact_email_selcet_query_from_text_setting)['setting_value'];

// portfolio_details table strat (myrecent work)

//portfolio_title
$portfolio_selcet_query = "SELECT * FROM portfolio_details";
$portfolio_selcet_query_from_db = mysqli_query($db_connect, $portfolio_selcet_query);

// single image
$select_single_img_query = "SELECT * FROM img_setting ";
$data_from_db_single_img = mysqli_query($db_connect, $select_single_img_query);
$after_assoc_name = mysqli_fetch_assoc($data_from_db_single_img);


//fronted pic
$email_add_from_login_page = $_SESSION['email_add_from_login_page'];
$select_profile_pic_query = "SELECT profile_img FROM users WHERE email_address='$email_add_from_login_page'";
?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>safa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                
                            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Safa</h3>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?= $asoc_contact_address ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?= $asoc_contact_phone ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?= $asoc_contact_email ?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="https://www.facebook.com/nazrul.islam.safa/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://www.instagram.com/nazrul.safa/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>
        <!-- banner-area -->
        <?php 
                    foreach ($all_data_from_db_home as $home) :
                    ?>
        <section id="home" class="banner-area banner-bg fix">
            
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">Hello! </h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"> <?= $asoc_name ?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"> <?= $asoc_bio ?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php
                                        if ($asoc_fb_link) :
                                        ?>
                                            <li><a href=" <?= $asoc_fb_link ?> " target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <?php
                                        endif;
                                        ?>
                                        <?php
                                        if ($asoc_tw_link) :
                                        ?>
                                            <li><a href=" <?= $asoc_tw_link ?> " target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <?php
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                            <img src="img/profile_img/<?= mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] ?>" alt="">
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/profile_img/<?= mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] ?>" alt="" style="width: 400px;">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p> <?= $asoc_about_info ?></p>
                            <h3>Skills:</h3>
                        </div>

                        <!-- Education Item -->
                        <?php
                        foreach ($all_data_from_db_edu as $edu) :
                        ?>
                            <?php

                            ?>
                            <div class="education">
                                <div class="year"><?= $edu['skills'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $edu['degree'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $edu['percentage'] ?>%;" aria-valuenow="<?= $edu['percentage'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                        <?php
                        endforeach;
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($all_data_from_db as $service) :
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['service_icon'] ?>"></i>
                                <h3><?= $service['service_title'] ?></h3>
                                <p><?= $service['service_description'] ?></p>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcasssse</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($portfolio_selcet_query_from_db as $value) :
                    ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="img/portfolio/thumbnail/<?= $value['portfolio_thumbnail'] ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span>Design</span>
                                    <h4><a href="portfolio-single.php?id=<?= $value['id'] ?>"> <?= $value['portfolio_title'] ?> </a></h4>
                                    <a href="portfolio-single.php?id=<?= $value['id'] ?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php
                        foreach ($all_data_from_db_showcase as $showcase) :
                        ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $showcase['showcase_icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $showcase['showcase_title'] ?></span></h2>
                                        <span><?= $showcase['showcase_description'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">

                            <?php
                            foreach ($all_data_from_db_qut as $data) :
                            ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="img/tes_customer/<?= $data['image'] ?>" alt="">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $data['text'] ?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $data['name'] ?></h5>
                                            <span><?= $data['designation'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <?php
                    foreach ($all_data_from_db_tes as $data) :
                    ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/tes_img/<?= $data['testimonial_pic'] ?>">
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p> <?= $asoc_contact_info ?> </p>
                            <h5>OFFICE IN <span>BANGLADESH</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span> <?= $asoc_contact_address ?> </li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span> <?= $asoc_contact_phone ?> </li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $asoc_contact_email ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <?php
                        if (isset($_SESSION['contact'])) :
                        ?>
                            <div class="alert alert-success">
                                <?= $_SESSION['contact'] ?>
                                <?php
                                unset($_SESSION['contact']);
                                ?>
                            </div>
                        <?php
                        endif;
                        ?>

                        <div class="contact-form">
                            <form action="contact_post.php" method="POST">
                                <input type="text" placeholder="your name *" name="name">
                                <input type="email" placeholder="your email *" name="email">
                                <textarea name="message" id="message" placeholder="your message *"></textarea>
                                <button class="btn">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>