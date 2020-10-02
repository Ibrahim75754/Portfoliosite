<?php 
    
    include "config.php";
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from corporx.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2020 07:53:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="BizBite corporate business template or agency and marketing template helps you easily create websites for your business.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>PORTFOLIO</title>

    <!--favicon icon-->
    <link rel="icon" href="img/fav.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->
<?php 
    $get_info=mysqli_query($con,"SELECT * FROM address");
    $get_info= mysqli_fetch_array($get_info);
?>

<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-envelope mr-1"></span> <a href="mailto:<?php echo $get_info['email']; ?>"><?php echo $get_info['email']; ?></a></li>
                            <li class="list-inline-item"><span class="fas fa-map-marker mr-1"></span> <?php echo $get_info['address']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left">
                            <li class="list-inline-item"><span class="ti-phone mr-2"><a href="tel:<?php echo $get_info['phone']; ?>"></span>Call Now: <strong><?php echo $get_info['phone']; ?></strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2 class="text-white">PORTFOLIO</h2>
                <!--<img src="img/logo-white.png" alt="logo" class="img-fluid"/>-->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a  href="about-us.php">About Us</a></li>
                    <li><a  href="services.php">Services</a></li>
                    <li><a  href="project.php">Project</a></li>
                    <li><a  href="#" class="dropdown-toggle">Blog</a>
                        <ul class="sub-menu">
                            <?php 
                            $get=mysqli_query($con,"SELECT * FROM navbar");
                            while($data=mysqli_fetch_array($get)) {
                                ?>
                                <li><a href="<?php echo $data['link']; ?>"><?php echo $data['blog_list']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a  href="contact-us.php">Contact Us</a></li>
                    <li><a href="logout_core.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->
