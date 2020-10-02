<?php 
    if(isset($_COOKIE["user"])){
        header("location: home.php");
    }
 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from corporx.themetags.com/basic-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2020 07:54:29 GMT -->
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

<!--body content wrap start-->
<div class="main">

    <!--hero background image with content slider start-->
    <section class="hero-section hero-bg-2 ptb-100 full-screen">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Create Your Account</h1>
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Create account</h6>
                                <p class="text-muted mb-0">Made with love by developers for developers.</p>
                            </div>
                            <form class="login-signup-form" action="php/registration_core.php" method="get">
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Your Name
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Email Address
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="email" name="email" class="form-control" placeholder="name@address.com">
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Password
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check-terms">
                                        <label class="custom-control-label" for="check-terms">I agree to the <a href="#">terms and conditions</a></label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                    Sign up
                                </button>
                                <?php if(isset($_REQUEST['success'])){
                                echo "<b style='color: green;'>registration successful</b>";
                            } 
                                ?>

                            </form>

                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an acocunt?</small>
                            <a href="login.php" class="small">Sign in</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero background image with content slider end-->


</div>
<!--body content wrap end-->


<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--jQuery-->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="js/mixitup.min.js"></script>
<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from corporx.themetags.com/basic-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2020 07:54:29 GMT -->
</html>