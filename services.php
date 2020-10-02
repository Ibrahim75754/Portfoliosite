<?php 
include "include/header.php";
 ?>
<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Our Services</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo block with hover effect start-->
    <section class="promo-block ptb-100">
        <div class="container">
            <div class="row">
                <?php
                $card1=mysqli_query($con,"SELECT * FROM card1");
                while ($get= mysqli_fetch_array($card1)) {
                    ?>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 rounded">
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
    <!--promo block with hover effect end-->

    <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-4">
                        <h2>First Class Business Solutions for You</h2>
                        <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                            foster tactical solutions without enabled value.</p>
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

    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay"
             style="background: url('img/home.jpg')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1">Increase More Traffic Your Business?</h2>
                        <p class="lead">Credibly redefine high-payoff web services after holistic experiences. Globally harness multidisciplinary solutions vis-a-vis intuitive customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-medall-alt icon-md"></span>
                        <h3 class="mb-0 text-white">1600</h3>
                        <p>Active users</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-headphone-alt icon-md"></span>
                        <h3 class="mb-0 text-white">2500</h3>
                        <p>Global client</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-cup icon-md"></span>
                        <h3 class="mb-0 text-white">2150</h3>
                        <p>Win award</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h3 class="mb-0 text-white">2150</h3>
                        <p>Clients satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->

    <!--contact us section start-->
    <section class="contact-us-section ptb-100">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="feedback.php" method="POST" id="contactForm" class="contact-us-form">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <?php 
                            if(isset($_REQUEST['sent'])){
                                echo "Thank You For Your Feedback";
                            }
                            ?>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">
                        <?php 
                            $get_info=mysqli_query($con,"SELECT * FROM address");
                            $get_info= mysqli_fetch_array($get_info)
                        ?>
                        <h5>Our Headquarters</h5>
                        <address>
                            <?php echo $get_info['address']; ?>
                        </address>
                        <br>
                        <span>Phone: <?php echo $get_info['phone']; ?> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color"><?php echo $get_info['email']; ?></a></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->


    <!--client section start-->
    <div class="client-section ptb-100 gray-light-bg">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <?php 
                        $get=mysqli_query($con,"SELECT * FROM client_logo");
                        while($row=mysqli_fetch_array($get)){
                        ?>
                        <div class="item single-client">
                            <img src="<?php echo $row['logo']; ?>" alt="client logo" class="client-img">
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