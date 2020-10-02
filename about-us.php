<?php 
include "include/header.php";
 ?>

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">About Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo section start-->

    <section class="promo-section pt-100">
        <div class="container">
            <div class="row">
                <?php
                    $card1=mysqli_query($con,"SELECT * FROM card1");
                    while ($row= mysqli_fetch_array($card1)){
                        ?>
                        <div class="col-md-4 col-lg-4">
                            <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                                <div class="promo-block-icon mr-4">
                                    <span class="<?php echo $row['icon']; ?> icon-md color-primary"></span>
                                </div>
                                <div class="promo-block-content">
                                    <h5><?php echo $row['title']; ?></h5>
                                    <p><?php echo $row['text']; ?></p>
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
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Our Mission & Vission</h2>
                        <p>Interactively develop timely niche markets before extensive imperatives. Professionally
                            repurpose interoperable growth strategies before effective core competencies.</p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Cost</strong>
                                Accounting Fundamentals
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                Cash Management
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="counter-single">
                                    <h4 class="mb-0 color-secondary">4566</h4>
                                    <strong>Total Project</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h4 class="mb-0 color-secondary">25002</h4>
                                    <strong>Total Customer</strong>
                                </div>
                            </div>
                            
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn primary-solid-btn mr-2">View Our Services</a>
                            <a href="#" class="btn outline-btn">Contact Us</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card border-0 shadow-sm text-white">
                        <img src="img/about-1.jpg" alt="video" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--our work process section start-->
    <section class="work-process-new ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>We Deliver Our Services Few Process</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate outsourcing through revolutionary.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap text-center">
                        <?php  
                            $process=mysqli_query($con,"SELECT * FROM our_process");
                            while($row=mysqli_fetch_array($process)){
                            ?>
                            <div class="single-work-process">
                                <div class="work-process-icon-wrap primary-bg rounded-circle">
                                    <i class="<?php echo $row['icon']; ?> icon-md text-white"></i>
                                    <span class="process-step secondary-bg text-white shadow-sm"><?php echo $row['id']; ?></span>
                                </div>
                                <div class="work-process-content mt-4">
                                    <h5><?php echo $row['name']; ?></h5>
                                    <p><?php echo $row['text']; ?> </p>
                                </div>
                            </div> 
                            <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->

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
                            <img src="img/<?php echo $row['img']; ?>" alt="team image" class="card-img-top">
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

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials What Clients Say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">

                        <?php
                            $get=mysqli_query($con,"SELECT * FROM client"); 
                            while($row=mysqli_fetch_array($get)){
                                ?>
                                    <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    <?php echo $row["quote"]; ?>
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="img/<?php echo $row['img']; ?>" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
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
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <!--client section start-->
    <div class="client-section ptb-100">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <?php 
                        $get=mysqli_query($con,"SELECT * FROM client_logo");
                        while($data=mysqli_fetch_array($get)){
                            ?>
                                <div class="item single-client">
                                    <img src="img/<?php echo $data['logo']; ?>" alt="client logo" class="client-img">
                                </div>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section start-->

</div>
<!--body content wrap end-->


<!--footer section start-->
<?php 
include "include/footer.php";
 ?>