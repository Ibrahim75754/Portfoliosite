<?php 
    
    include "include/config.php";
    //#18593D 10%, #0DF08C  ,1A2C79
    if(!isset($_COOKIE["user"])){
        header("location: login.php");
    }

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
    $get_info= mysqli_fetch_array($get_info)
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
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/port.png" alt="logo" class="img-fluid"/ style="height: 80px;">
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
<!--body content wrap start-->
<div class="main">

    <?php
        $get_partnar=mysqli_query($con,"SELECT * FROM partnar");
        $get_partnar= mysqli_fetch_array($get_partnar)
    ?>

    <!--hero section start-->
    <section class="hero-equal-height pt-165 pb-100 gradient-overly-right-light" style="background: url('img/<?php echo $get_partnar["img"]; ?>')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-slider-content">
                        <span class="text-uppercase"><?php echo $get_partnar["subtitle"];?></span>
                        <h1><?php echo $get_partnar["title"];?></h1>
                        <p class="lead"><?php echo $get_partnar["text"];?></p>

                        <div class="action-btns mt-3">
                            <a href="#" class="btn secondary-solid-btn">Get Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="promo-block ptb-100 mt--165 z-index position-relative">
        <div class="container">
            <div class="row">
                <?php
                    $card1=mysqli_query($con,"SELECT * FROM card1");
                    while ($get= mysqli_fetch_array($card1)) {
                        ?>
                        <div class="col-md-4 col-lg-4">
                            <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 custom-radius white-bg">
                                <div class="promo-block-icon mb-3">
                                    <span class="<?php echo $get['icon']; ?> icon-md color-primary"></span>
                                </div>
                                <div class="promo-block-content">
                                    <h5><?php echo $get['title']; ?></h5>
                                    <p><?php echo $get['text']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section pb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="video-promo-content mb-md-4 mb-lg-0">

                        <?php
                            $get_aboutus=mysqli_query($con,"SELECT * FROM aboutus");
                            $get_aboutus= mysqli_fetch_array($get_aboutus)
                        ?>

                        <h2><?php echo $get_aboutus['title']; ?></h2>
                        <p class="lead"><?php echo $get_aboutus['text']; ?></p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong> Websites Design</li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Accounting</strong> Procedures Guidebook</li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong> Accounting Fundamentals</li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                        </ul>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn primary-solid-btn mr-2">View Our Services</a>
                            <a href="#" class="btn outline-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="image-wrap">
                        <img src="<?php echo $get_aboutus['img']; ?>" alt="video" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                            $get_service=mysqli_query($con,"SELECT * FROM service");
                            $get_service= mysqli_fetch_array($get_service)
                ?>
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2><?php echo $get_service['title']; ?></h2>
                        <p class="lead"><?php echo $get_service['text']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $card2=mysqli_query($con,"SELECT * FROM card2");
                    while ($get_service= mysqli_fetch_array($card2)){
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="<?php echo $get_service['icon']; ?> icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5><?php echo $get_service['title']; ?></h5>
                            <p class="mb-0"><?php echo $get_service['text']; ?></p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!--services section end-->

    <!--promo section start-->
    <section class="promo-section gradient-bg ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="app-business-content text-center text-white">
                        <h2 class="text-white">Download Apps Managing Business</h2>
                        <p class="lead">Building your Apps busines helps attract more potential clients.
                            Our integrated marketing team will work directly long-term high-impact convergence. </p>

                        <div class="action-btns mt-5">
                            <ul class="list-inline app-download-list">
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-windows icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">Windows</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-apple icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">App Store</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-google-play icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">Google Play</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--our work or portfolio section start-->
    <section class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Check Our Quality Work</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                            develop end-to-end customer service without extensive data.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">

                        <?php
                            $work_name=mysqli_query($con,"SELECT * FROM work");
                            while($row1 = mysqli_fetch_array($work_name)){
                                ?>
                                
                                <button type="button" class="filter-btn" id="<?php echo $row1['id']; ?>"  onclick="get_demo(<?php echo $row1['id'];?>)"><?php echo $row1['work_name']; ?></button>

                                <?php
                            }
                         ?>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                      
                        <?php $portfolio=mysqli_query($con,"SELECT * FROM portfolio");
                        while($row2=mysqli_fetch_array($portfolio)){
                            ?>
                             <div class="mix portfolio-item" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.html" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/<?php echo $row2['img']; ?>" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1"><?php echo $row2['title']; ?></h5>
                                            <p><?php echo $row2['text']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                            ?>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work or portfolio section end-->

    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Our Latest News</h2>
                        <p class="lead">
                            Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively
                            transform tactical methods of empowerment via resource.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php 
                $news=mysqli_query($con,"SELECT * FROM news");
                while($row=mysqli_fetch_array($news)){
                    ?>
                    <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute"><?php echo $row["type"]; ?></span></a>
                            <a href="#"><img src="img/<?php echo $row['img']; ?>" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#"><?php echo $row["title"]; ?></a></h3>
                            <p class="card-text"><?php echo $row["text"]; ?></p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <img style="height: 100px;width: 100px;" src="img/<?php echo $row['author_img']; ?>" class="mr-2 p-3 bg-white rounded-circle border">
                                <div class="author-content">
                                    <a href="#" class="d-block"><?php echo $row["author"]; ?></a>
                                    <small><?php echo $row["date"]; ?></small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> <?php echo $row["author_like"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>What Clients Say About Us</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                    $get=mysqli_query($con,"SELECT * FROM client"); 
                    while($row=mysqli_fetch_array($get)){
                        ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            <?php echo $row["quote"]; ?>
                        </blockquote>
                        <div class="client-img d-flex align-items-center justify-content-between pt-4">
                            <div class="d-flex align-items-center">
                                <img src="img/<?php echo $row["img"]; ?>" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                <div class="client-info">
                                    <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                                    <small class="mb-0"><?php echo $row["title"]; ?></small>
                                </div>
                            </div>
                            <div class="client-ratting">
                                <ul class="list-inline client-ratting-list">
                                    <?php
                                    for ($i=0; $i <$row["obtain_grade"]; $i++) { 
                                        ?>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <?php
                                    }
                                    ?>
                                    
                                </ul>
                                <span class="font-weight-bold"><?php echo $row["obtain_grade"]; ?> <small class="font-weight-lighter">Out of 5</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                ?>
                
                
            </div>

        </div>
    </section>
    <!--testimonial section end-->


    <!--team two section start-->
    <section class="team-two-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet Our Lovely Team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric outsourcing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php  
                $get_team=mysqli_query($con,"SELECT * FROM team");
                while($row=mysqli_fetch_array($get_team)){
                    ?>
                     <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card text-center border-0">
                            <img src="img/<?php echo $row['img']; ?>" alt="team image" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0"><?php echo $row['name']; ?></h5>
                                <span><?php echo $row['title']; ?></span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"<?php echo $row['text']; ?>" </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white"><?php echo $row['name']; ?></h5></a><span class="teacher-field text-white"><?php echo $row['title']; ?></span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="team-profile.php?profile_id=<?php echo $row["id"];?>" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </section>
    <!--team two section end-->

    <!--call to action section start-->
    <section class="call-to-action py-5">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Consulting Agency for Your Business</h3>
                        <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="contact-us.php" class="btn secondary-solid-btn">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

</div>
<!--body content wrap end-->


<?php 
    include "include/footer.php";
?>

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    

    function get_demo(id){

        /*$("#".concat(id)).css({"background-color":"black"});*/

        $.ajax({
            url:"include/action.php",
            type:"POST",
            data : {
                get_port:1,
                id:id
            },
            cache : false,
            success:function(response){
                console.log(response);
                $("#MixItUp").html(response);
            }

        });

    }
</script>